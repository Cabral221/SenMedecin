<?php

namespace Tests\Feature;

use App\Jobs\SendPrerappelSms;
use Carbon\Carbon;
use Faker\Factory;
use Tests\TestCase;
use App\Models\Medecin;
use App\Models\Patient;
use App\Models\Service;
use App\Models\Partener;
use App\Models\Responsable;
use Illuminate\Support\Str;
use App\Notifications\SendSms;
use App\Models\TypeAppointment;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\Facades\Notification;

class SchedulerTwoDaysBeforeTest extends TestCase
{
    
    public $faker;
    
    public function __construct()
    {
        parent::__construct();
        $this->faker = Factory::create('fr_FR');
    }

    public function loadFixtures() : Patient
    {
        /** @var Partener $partener */
        $partener = $this->createPartener();
        /** @var Responsable $responsable */
        $responsable = $this->createResponsable($partener);
        /** @var Medecin $medecin */
        $medecin = $this->createMedecin($responsable);
        $patient = $this->getMinimalDataPatient($medecin);

        return $patient;
    }
    
    /**
    * @test
    * @return void
    */
    public function excuteCommandToSendRappelBeforeTwoDays() : void
    {
        // Etant donné qu'il y a un RV DANS L'INTERVALLE  [+48h , -58h]
        $patient = $this->loadFixtures();
        $firstType = TypeAppointment::where(['libele' => 'CPN'])->first();

        $patient->appointments()->create([
            'date' => Carbon::today()->addDays(2),
            'description' => 'CPN X',
            'type_appointment_id' => $firstType->id,
            'medecin_id' => $patient->medecin->id
        ]);

        // DUAND j"execute la commande send:prerappel
        Notification::fake();
        $this->artisan('send:prerappel')
        
        // Alors un evenement doit etre declancher pour envoyer un sms
        ->assertExitCode(0);
        Notification::assertSentTo([$patient], SendSms::class);
    }

    /**
     * @test
     *
     * @return void
     */
    public function doesNotNotifyIfAppointmentIsOverThanInterval() : void
    {
        // Etant donné qu'il n'y a pas un RV DANS deux jours
        $patient = $this->loadFixtures();
        $firstType = TypeAppointment::where(['libele' => 'CPN'])->first();

        $patient->appointments()->create([
            'date' => Carbon::today()->addDay(),
            'description' => 'CPN X',
            'type_appointment_id' => $firstType->id,
            'medecin_id' => $patient->medecin->id
        ]);
        $patient->appointments()->create([
            'date' => Carbon::now()->addDays(3),
            'description' => 'CPN X',
            'type_appointment_id' => $firstType->id,
            'medecin_id' => $patient->medecin->id
        ]);

        // DUAND j"execute la commande send:prerappel
        Notification::fake();
        $this->artisan('send:prerappel')
        
        // Alors la notification sms ne doit pas etre envoyé
        ->assertExitCode(0);
        Notification::assertNotSentTo([$patient], SendSms::class);
    }

    
    /**
     * Tester si les notifs rentre bien dans le queue
     * 
     * @test
     * @return void
    */
    public function notificationDispathFromQueueBeforeTwoDays() : void
    {
        // Etant donné qu'il y a un RV DANS L'INTERVALLE  [+48h , -58h]
        $patient = $this->loadFixtures();
        $firstType = TypeAppointment::where(['libele' => 'CPN'])->first();

        $patient->appointments()->create([
            'date' => Carbon::today()->addDays(2),
            'description' => 'CPN X',
            'type_appointment_id' => $firstType->id,
            'medecin_id' => $patient->medecin->id,
        ]);

        // DUAND j"execute la commande send:prerappel
        Queue::fake();
        $this->artisan('send:prerappel')
        
        // Alors un evenement doit etre declancher pour envoyer un sms PAR UN CANNAL "QUEU"
        ->assertExitCode(0);
        Queue::assertPushed(SendPrerappelSms::class);
    }
    
}

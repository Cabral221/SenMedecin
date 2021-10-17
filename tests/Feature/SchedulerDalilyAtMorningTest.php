<?php

namespace Tests\Feature;

use Carbon\Carbon;
use Tests\TestCase;
use App\Models\Medecin;
use App\Models\Patient;
use App\Models\Partener;
use App\Jobs\SendRappelSms;
use App\Models\Responsable;
use App\Models\TypeAppointment;
use App\Notifications\SendSmsRappel;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\Facades\Notification;

class SchedulerDalilyAtMorningTest extends TestCase
{

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
    public function excuteCommandToSendRappelForPatientWhoHaveRv() : void
    {
        // Etant donné qu'il y a un RV aujourd'hui
        $patient = $this->loadFixtures();
        $firstType = TypeAppointment::where(['libele' => 'CPN'])->first();
        
        
        $patient->appointments()->create([
            'date' => Carbon::now(),
            'description' => 'CPN X',
            'type_appointment_id' => $firstType->id,
            'medecin_id' => $patient->medecin->id
        ]);

        // DUAND j"execute la commande send:rappel
        Notification::fake();
        $this->artisan('send:rappel');
        
        // Alors un evenement doit etre declancher pour envoyer un sms
        Notification::assertSentTo($patient, SendSmsRappel::class);
    }

    /**
     * @test
     *
     * @return void
     */
    public function doesNotNotifyIfAppointmentIsOverThanToday() : void
    {
        // Etant donné qu'il n'y a pas un RV aujourd'hui
        $patient = $this->loadFixtures();
        $firstType = TypeAppointment::where(['libele' => 'CPN'])->first();

        $patient->appointments()->create([
            'date' => Carbon::today()->subHour(),
            'description' => 'CPN X',
            'type_appointment_id' => $firstType->id,
            'medecin_id' => $patient->medecin->id
        ]);
        $patient->appointments()->create([
            'date' => Carbon::today()->addDay(),
            'description' => 'CPN X',
            'type_appointment_id' => $firstType->id,
            'medecin_id' => $patient->medecin->id
        ]);

        // DUAND j"execute la commande send:rappel
        Notification::fake();
        $this->artisan('send:rappel');
        
        // Alors la notification sms ne doit pas etre envoyé
        Notification::assertNotSentTo([$patient], SendSmsRappel::class);
    }

    
    /**
     * Tester si les notifs rentre bien dans le queue
     * 
     * @test
     * @return void
    */
    public function notificationDispathFromQueueSmsDaily() : void
    {
        // Etant donné qu'il y a un RV aujourd'hui
        $patient = $this->loadFixtures();
        $firstType = TypeAppointment::where(['libele' => 'CPN'])->first();

        $patient->appointments()->create([
            'date' => Carbon::now(),
            'description' => 'CPN X',
            'type_appointment_id' => $firstType->id,
            'medecin_id' => $patient->medecin->id,
        ]);

        // DUAND j"execute la commande send:rappel
        Queue::fake();
        $this->artisan('send:rappel');
        
        // Alors un evenement doit etre declancher pour envoyer un sms PAR UN CANNAL "QUEU"
        Queue::assertPushed(SendRappelSms::class);
        Queue::assertPushedOn('sms', SendRappelSms::class);
    }
    
}

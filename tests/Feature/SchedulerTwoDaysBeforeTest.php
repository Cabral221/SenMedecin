<?php

namespace Tests\Feature;

use Carbon\Carbon;
use Faker\Factory;
use Tests\TestCase;
use Faker\Generator;
use App\Models\Medecin;
use App\Models\Patient;
use App\Models\Partener;
use App\Models\Responsable;
use App\Models\Service;
use Illuminate\Support\Str;
use App\Models\TypeAppointment;
use App\Notifications\SendSms;
use App\Services\Appointment\Appointment;
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
    
    public function getMinimalDataPatient(Medecin $medecin) : Patient
    {
        /** @var Patient $patient */
        $patient = $medecin->patients()->create([
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'birthday' => Carbon::now()->subYears(rand(17,35)),
            'address' => $this->faker->address,
            'phone' =>  $this->faker->unique()->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'is_active' => true,
        ]);
        $cpn = TypeAppointment::create(['libele' => 'CPN']);
        $acc = TypeAppointment::create(['libele' => 'Accouchement']);
        $patient->pregnancies()->create([
            'date' => Carbon::now()->subYears($patient->birthday->age - 15),
            'accouchement' => Carbon::now()->subYears($patient->birthday->age - 15)->addMonths(9),
        ]);
        // Antecedent medical
        $patient->antecedent()->create([
            'father' => $this->faker->text,
            'mother' => $this->faker->text,
            'family' => $this->faker->text,
            'other_exam' => $this->faker->text,
            'treating' => $this->faker->text,
        ]);
        // rendez-vous cpn + acc
        $patient->appointments()->create([
            'date' => $patient->pregnancy()->date->addMonth(1),
            'description' => $cpn->libele . ' 1',
            'type_appointment_id' => $cpn->id,
            'medecin_id' => $patient->medecin->id
        ]);
        $patient->appointments()->create([
            'date' => $patient->pregnancy()->date->addMonth(3),
            'description' => $cpn->libele . ' 2',
            'type_appointment_id' => $cpn->id,
            'medecin_id' => $patient->medecin->id
        ]);
        $patient->appointments()->create([
            'date' => $patient->pregnancy()->date->addMonth(5),
            'description' => $cpn->libele . ' 3',
            'type_appointment_id' => $cpn->id,
            'medecin_id' => $patient->medecin->id
        ]);
        $patient->appointments()->create([
            'date' => $patient->pregnancy()->date->addMonth(7),
            'description' => $cpn->libele . ' 4',
            'type_appointment_id' => $cpn->id,
            'medecin_id' => $patient->medecin->id
        ]);
        
        $patient->appointments()->create([
            'date' => $patient->pregnancy()->date->addMonth(7),
            'description' => $acc->libele,
            'type_appointment_id' => $acc->id,
            'medecin_id' => $patient->medecin->id
        ]);
        
        return $patient;
    }
    
    public function createPartener() : Partener
    {
        return Partener::create([
            'name' => $this->faker->company,
            'email' => $this->faker->unique()->safeEmail,
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'image' => 'https://picsum.photos/640/480',
            'is_active' => true,
        ]);
    }
    
    public function createResponsable(Partener $partener) : Responsable
    {
        return $partener->responsable()->create([
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'phone' => 338240000,
            'email' => $this->faker->unique()->safeEmail,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
    }
    
    public function createMedecin(Responsable $responsable) : Medecin
    {
        $service = Service::create(['libele' => 'Maternité']);
        return $responsable->medecins()->create([
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'service_id' => $service->id,
            'remember_token' => Str::random(10),
        ]);
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
        
        // Alors un evenement doit etre declancher pour envoyer un sms PAR UN CANNAL "QUEU"
        ->assertExitCode(0);
        Notification::assertSentTo([$patient], SendSms::class);
    }

    /**
     * @test
     *
     * @return void
     */
    public function doesNotNotifyIfAppointmentIsOverThanInterval()
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

    // Tester la notification dans la base de donne

    // Tester si les notifs rentre bien dans le queue
    
    
}

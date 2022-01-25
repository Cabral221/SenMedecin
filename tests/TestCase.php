<?php

namespace Tests;

use Carbon\Carbon;
use Faker\Factory;
use App\Models\Medecin;
use App\Models\Patient;
use App\Models\Service;
use App\Models\Partener;
use App\Models\Responsable;
use Illuminate\Support\Str;
use App\Models\TypeAppointment;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Notification;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, RefreshDatabase;

    public \Faker\Generator $faker;

    public function __construct()
    {
        parent::__construct();
        $this->faker = Factory::create('fr_FR');
    }

    public function setUp() : void
    {
        parent::setUp();
        $this->cleanDirectories();
        Artisan::call('migrate');
        $this->seed('DataSeeder');
    }

    public function cleanDirectories() : void
    {
        Storage::disk('public')->deleteDirectory('uploads');
    }

    public function getMinimalDataPatient(Medecin $medecin) : Patient
    {
        $patient = $this->createPatient($medecin);        

        $cpn = TypeAppointment::where(['libele' => 'CPN'])->first();
        $acc = TypeAppointment::where(['libele' => 'Accouchement'])->first();
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
            'date' => $patient->pregnancy()->date->addMonth(),
            'description' => $cpn->libele . ' 1',
            'type_appointment_id' => $cpn->id,
            'medecin_id' => $patient->medecin->id
        ]);
        $patient->appointments()->create([
            'date' => $patient->pregnancy()->date->addMonths(3),
            'description' => $cpn->libele . ' 2',
            'type_appointment_id' => $cpn->id,
            'medecin_id' => $patient->medecin->id
        ]);
        $patient->appointments()->create([
            'date' => $patient->pregnancy()->date->addMonths(5),
            'description' => $cpn->libele . ' 3',
            'type_appointment_id' => $cpn->id,
            'medecin_id' => $patient->medecin->id
        ]);
        $patient->appointments()->create([
            'date' => $patient->pregnancy()->date->addMonths(7),
            'description' => $cpn->libele . ' 4',
            'type_appointment_id' => $cpn->id,
            'medecin_id' => $patient->medecin->id
        ]);
        
        $patient->appointments()->create([
            'date' => $patient->pregnancy()->date->addMonths(7),
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
    
    public function createResponsable(Partener $partener = null) : Responsable
    {
        if($partener == null) $partener = $this->createPartener();

        return $partener->responsable()->create([
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'phone' => 338240000,
            'email' => $this->faker->unique()->safeEmail,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
    }
    
    public function createMedecin(Responsable $responsable = null) : Medecin
    {
        if($responsable === null) $responsable = $this->createResponsable();

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

    public function createPatient(Medecin $medecin) : Patient
    {
        Notification::fake();
        return $medecin->patients()->create([
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'birthday' => Carbon::now()->subYears(rand(17,35)),
            'address' => $this->faker->address,
            'phone' =>  221778435052,
            'email' => $this->faker->unique()->safeEmail,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'is_active' => true,
        ]);
    }

    public function loginAsResponsable(Responsable $responsable = null) : Responsable
    {   
        if(!$responsable) {
            $partener = $this->createPartener();
            $responsable = $this->createResponsable($partener);
        }

        $this->actingAs($responsable, 'responsable');
        return $responsable;
    }

    public function loginAsMedecin(Medecin $medecin = null) : Medecin
    {   
        if(!$medecin) {
            $partener = $this->createPartener();
            $responsable = $this->createResponsable($partener);
            $medecin = $this->createMedecin($responsable);
        }

        $this->actingAs($medecin, 'medecin');
        return $medecin;
    }

    public function loginAsPatient(Patient $patient = null) : Patient
    {   
        if(!$patient) {
            $partener = $this->createPartener();
            $responsable = $this->createResponsable($partener);
            $medecin = $this->createMedecin($responsable);
            $patient = $this->createPatient($medecin);
        }

        $this->actingAs($patient, 'patient');
        return $patient;
    }

}

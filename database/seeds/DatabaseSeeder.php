<?php

// use Faker\Factory;
use App\Models\Info;
use App\Models\Post;
use App\Models\Admin;
use App\Models\Carnet;
use App\Models\Medecin;
use App\Models\Patient;
use App\Models\Service;
use App\Models\Partener;
use App\Models\Responsable;
use Illuminate\Support\Str;
use App\Models\TypeAppointment;
use Illuminate\Database\Seeder;
use App\Models\Partener_service;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DataSeeder::class);
        // $faker = Factory::create('fr_FR');

        Admin::create([
            'name' => 'Empro SN',
            'email' => 'empro@empro.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'gen_password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'status' => true,
        ]);
        Admin::create([
            'name' => 'SenMedecin SN',
            'email' => 'senmedecin@senmedecin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'gen_password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'status' => false,
        ]);

        Info::create([
            'address' => 'Siege social no 1234, Dakar Sénégal',
            'phone' => '+33 987 98 90',
            'email' => 'contact@axxundurel.com',
        ]);

        TypeAppointment::create(['libele' => 'CPN']);
        TypeAppointment::create(['libele' => 'Suivis']);
        TypeAppointment::create(['libele' => 'Accouchement']);
        TypeAppointment::create(['libele' => 'Vaccinal']);

        $s1 = Service::create(['libele' => 'Maternité']);
        $s2 = Service::create(['libele' => 'Pédiatrie']);
        $s3 = Service::create(['libele' => 'Gynécologie']);

        $partener = Partener::create([
            'name' => 'Partener 1',
            'email' => 'partener@partener.com',
            'address' => 'Adresse du partener 1',
            'phone' => '330000000',
            'image' => 'image.jpg',
        ]);

        $responsable = Responsable::create([
            'first_name' => 'Responsable 1',
            'last_name' => 'Rname',
            'phone' => '779999999',
            'email' => 'responsable@responsable.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'gen_password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'partener_id' => $partener->id,
        ]);

        // dd($services->id);
        $partener_service = Partener_service::create([
            'partener_id' => $partener->id,
            'service_id' => $s1->id
        ]);
        Partener_service::create([
            'partener_id' => $partener->id,
            'service_id' => $s2->id
        ]);
        Partener_service::create([
            'partener_id' => $partener->id,
            'service_id' => $s3->id
        ]);

        $medecin = Medecin::create([
            'first_name' => 'Medecin 1',
            'last_name' => 'Mname',
            'phone' => '770000000',
            'email' => 'medecin@medecin.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'gen_password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'service_id' => $s1->id,
            'responsable_id' => $responsable->id,
            'remember_token' => Str::random(10),
        ]);
        
        $carnet = Carnet::create();

        $patient = Patient::create([
            'first_name' => 'Patient 1',
            'last_name' => 'pname',
            'birthday' => now(),
            'address' => '1603 dakar, no precis',
            'phone' => '770000000',
            'email' => 'patient@patient.com',
            'medecin_id' => $medecin->id,
            'carnet_id' => $carnet->id,
            // 'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'is_active' => true,
        ]);

        $patient2 = Patient::create([
            'first_name' => 'Patient 2',
            'last_name' => 'pname',
            'birthday' => now(),
            'address' => '1603 dakar, no precis',
            'phone' => '770000001',
            'email' => 'patient2@patient.com',
            'medecin_id' => $medecin->id,
            'carnet_id' => $carnet->id,
            // 'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'is_active' => false,
        ]);

        $patient->childrens()->create([
            'first_name' => 'children un',
            'last_name' => 'child',
            'birthday' => Carbon\Carbon::now()->subMonth(),
            'genre' => 'Masculin',
        ]);

        Post::create([
            'title' => 'Mon Titre de blog',
            'slug' => 'mon-titre-de-blog',
            'subTitle' => 'Hic totam nihil neque dolor autem reiciendis, earum accusamus, fuga laborum itaque aut nisi?',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis sint asperiores voluptate eius dolorem? Delectus aliquid, quos omnis ipsa optio, iure commodi placeat, itaque cupiditate sit sed suscipit voluptatum? Rem!',
            'publish' => true,
        ]);
    }
}

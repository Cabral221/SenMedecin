<?php

// use Faker\Factory;
use Carbon\Carbon;
use App\Models\Post;
use App\Models\Admin;
use App\Models\Carnet;
use App\Models\Medecin;
use App\Models\Patient;
use App\Models\Service;
use App\Models\Partener;
use Illuminate\Support\Str;
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
        Notification::fake();
        
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

        $responsable = $partener->responsable()->create([
            'first_name' => 'Responsable 1',
            'last_name' => 'Rname',
            'phone' => '779999999',
            'email' => 'responsable@responsable.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            // 'partener_id' => $partener->id,
        ]);

        Partener_service::create([
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
            'phone' => '778435052',
            'email' => 'medecin@medecin.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'service_id' => $s1->id,
            'responsable_id' => $responsable->id,
            'remember_token' => Str::random(10),
        ]);

        $patient = Patient::create([
            'first_name' => 'Astou',
            'last_name' => 'Ndiaye',
            'birthday' => Carbon::now()->subYears(20),
            'address' => '1603 dakar, no precis',
            'phone' => '778435052',
            'email' => 'patient@patient.com',
            'medecin_id' => $medecin->id,
            // 'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'is_active' => true,
        ]);
        $patient->phone_verification_token = null;
        $patient->save();

        Patient::create([
            'first_name' => 'Patient 2',
            'last_name' => 'pname',
            'birthday' => Carbon::now()->subYears(30),
            'address' => '1603 dakar, no precis',
            'phone' => '770005052',
            'email' => 'patient2@patient.com',
            'medecin_id' => $medecin->id,
            // 'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'is_active' => false,
        ]);

        $patient->childrens()->create([
            'first_name' => 'children un',
            'last_name' => 'child',
            'birthday' => Carbon::now()->subMonth(),
            'genre' => 'Masculin',
        ]);

        Post::create([
            'title' => 'Mon Titre de blog',
            'slug' => 'mon-titre-de-blog',
            'subTitle' => 'Hic totam nihil neque dolor autem reiciendis, earum accusamus, fuga laborum itaque aut nisi?',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis sint asperiores voluptate eius dolorem? Delectus aliquid, quos omnis ipsa optio, iure commodi placeat, itaque cupiditate sit sed suscipit voluptatum? Rem!',
            'publish' => true,
        ]);

        $this->call(FixtureSeeder::class);
    }
}

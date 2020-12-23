<?php

use Carbon\Carbon;
use Faker\Factory;
use App\Models\Medecin;
use App\Models\Patient;
use App\Models\Partener;
use App\Models\Responsable;
use Illuminate\Support\Str;
use App\Models\TypeAppointment;
use Illuminate\Database\Seeder;
use App\Models\Partener_service;

/**
 * Created by IntelliJ IDEA.
 * User: Cabral221
 * Date: 22/12/2020
 * Time: 15:50
 */

class FixtureSeeder extends Seeder
{
    /**
     * Run Fixtures on Database
     * @return void
     */
    public function run(){

        /** @var Faker\Provider\fr_FR\ $faker */
        $faker = Factory::create('fr_FR');

        for ($i = 0;$i < 10;$i++ ){

            /** @var Partener $partener */
            $partener = Partener::create([
                'name' => $faker->company,
                'email' => $i.$faker->email,
                'address' => $faker->address,
                'phone' => $faker->phoneNumber,
                'image' => 'https://picsum.photos/640/480',
                'is_active' => true,
            ]);

            Partener_service::create([
                'partener_id' => $partener->id,
                'service_id' => 1
            ]);
            Partener_service::create([
                'partener_id' => $partener->id,
                'service_id' => 2
            ]);
            Partener_service::create([
                'partener_id' => $partener->id,
                'service_id' => 3
            ]);

            /** @var Responsable $responsable */
            $responsable = $partener->responsable()->create([
               'first_name' => $faker->firstName,
               'last_name' => $faker->lastName,
               'phone' => 338240000+$i,
               'email' => $i.$faker->email,
               'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
           ]);

            for ($j = 0; $j <  rand(4,8); $j++){

                /** @var Medecin $medecin */
                $medecin = $responsable->medecins()->create([
                    'first_name' => $faker->firstName,
                    'last_name' => $faker->lastName,
                    'phone' => $faker->phoneNumber,
                    'email' => $i.$j.$faker->email,
                    'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                    'service_id' => rand(1,3),
                    'remember_token' => Str::random(10),
                ]);


                for($m = 0; $m < rand(10, 15); $m++){

                    /** @var Patient $patient */
                    $patient = $medecin->patients()->create([
                        'first_name' => $faker->firstName,
                        'last_name' => $faker->lastName,
                        'birthday' => Carbon::now()->subYears(rand(17,35)),
                        'address' => $faker->address,
                        'phone' =>  $faker->phoneNumber,
                        'email' => $faker->email,
                        // 'carnet_id' => $carnet->id,
                        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                        'remember_token' => Str::random(10),
                        'is_active' => $faker->boolean,
                    ]);

                    if($patient->is_active){
                        $cpn = TypeAppointment::where('libele','CPN')->first();
                        $acc = TypeAppointment::where('libele','Accouchement')->first();

                        $patient->pregnancies()->create([
                            'date' => Carbon::now()->subYears($patient->birthday->age - 15),
                            'accouchement' => Carbon::now()->subYears($patient->birthday->age - 15)->addMonths(9),
                        ]);

//                    Antecedent medical
                        $patient->antecedent()->create([
                            'father' => $faker->text,
                            'mother' => $faker->text,
                            'family' => $faker->text,
                            'other_exam' => $faker->text,
                            'treating' => $faker->text,
                        ]);
//                    rendez-vous cpn + acc
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

//                    ajouter enfant
                        for ($k = 0; $k < rand(1, 5); $k++){
                            $patient->childrens()->create([
                                'first_name' => $faker->firstName,
                                'last_name' => $faker->lastName,
                                'birthday' => Carbon::now()->subYears(($patient->birthday->age - 15) - $k),
                                'genre' => $faker->randomElement(['Masculin','Féminin']),

                            ]);
                        }

                    }

                }


            }
        }

    }
}

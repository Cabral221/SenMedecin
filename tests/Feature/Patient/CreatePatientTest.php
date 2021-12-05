<?php

namespace Tests\Feature\Patient;

use Carbon\Carbon;
use Tests\TestCase;
use Illuminate\Support\Str;
use Illuminate\Testing\TestResponse;
use Illuminate\Support\Facades\Notification;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreatePatientTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function an_medecin_can_access_the_create_patient_page() : void
    {
        $this->loginAsMedecin();

        $response = $this->get('/medecin/patients/create');

        $response->assertOk();
    }

    /** @test */
    public function create_patient_requires_validation() : void
    {
        $this->loginAsMedecin();

        $response = $this->post('/medecin/patients');

        $response->assertSessionHasErrors(['patient_first_name','patient_last_name','patient_birthday','patient_address','patient_phone','patient_email','patient_password',]);
    }

    /** @test */
    public function patient_email_needs_to_be_unique() : void
    {
        $medecin = $this->loginAsMedecin();
        Notification::fake();

        $medecin->patients()->create([
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'birthday' => Carbon::now()->subYears(rand(17,35)),
            'address' => $this->faker->address,
            'phone' =>  221778435052,
            'email' => 'test@test.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'is_active' => true,
        ]);

        $response = $this->post('/medecin/patients', [
            'email' => 'test@test.com',
        ]);

        $response->assertSessionHasErrors('patient_email');
    }

    // Patient phone needs to be unique
    // ...

    /** @test */
    public function medecin_can_create_new_patient() : void
    {
        $this->loginAsMedecin();
        Notification::fake();

        /** @var TestResponse $response */
        $response = $this->post('/medecin/patients', [
            'patient_first_name' => 'John',
            'patient_last_name' => 'Doe',
            'patient_birthday' => Carbon::now()->subYears(rand(17,35)),
            'patient_address' => $this->faker->address,
            'patient_phone' =>  221778435052,
            'patient_email' => 'test@test.com',
            'patient_password' => 'password', 
            'patient_password_confirmation' => 'password', 
        ]);

        $this->assertDatabaseHas(
            'patients',
            [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'test@test.com',
            ]
        );

        $response->assertSessionHas('success');
        $response->assertRedirect('/medecin/patients');
    }
}

<?php

namespace Tests\Feature\Patient\Auth;

use Hash;
use Tests\TestCase;
use Illuminate\Auth\SessionGuard;
use Illuminate\Support\Facades\Auth;

class LoginPatientTest extends TestCase
{
    /** @test */
    public function guest_access_login_patient_page() : void
    {
        $this->get('/patient/login')

        ->assertStatus(200)
        ->assertViewIs('patient.auth.login');
    }

    /** @test */
    public function patient_cannot_view_a_login_form_when_authenticated() : void
    {
        $this->loginAsPatient();

        $this->get('/patient/login')

        ->assertRedirect('/patient/home');
    }

    /** @test */
    public function required_validation_for_login_form_submitted() : void
    {
        $this->from('/patient/login')
            ->post('/patient/login', [
                'email' => '',
                'password' => '',
            ])
            
        ->assertStatus(302)
        ->assertRedirect('/patient/login')
        ->assertSessionHasErrors(['email', 'password']);
    }

    /** @test */
    public function cannot_login_with_no_corresponding_credential() : void
    {
        $patient = $this->createPatient(null, ['email' => 'test@test.com']);

        $this->from('/patient/login')
        ->post('/patient/login', [
            'email' => 'aze@aze.test',
            'password' => 'test@test.com'
        ])

        ->assertStatus(302)
        ->assertRedirect('/patient/login')
        ->assertSessionHasErrors(['email' => 'Ces identifiants ne correspondent pas à nos enregistrements.']);
        $this->assertTrue(session()->hasOldInput('email'));
        $this->assertFalse(session()->hasOldInput('password'));
        $this->assertGuest('patient');
    }

    /** @test */
    public function successful_login_with_correct_credentials() : void
    {
        $patient = $this->createPatient(null, ['email' => 'test@test.com', 'password' => Hash::make("password")]);

        $this->from('/patient/login')
        ->post('/patient/login', [
            'email' => 'test@test.com',
            'password' => 'password'
        ])

        ->assertRedirect('/patient/home');
        $this->assertAuthenticatedAs($patient, 'patient');
    }

    /** @test */
    public function no_login_with_unactive_account() : void
    {
        $this->createPatient(null, [
            'email' => 'test@test.com',
            'password' => Hash::make("password"),
            'is_active' => false
        ]);

        $response = $this->from('/patient/login')
        ->post('/patient/login', [
            'email' => 'test@test.com',
            'password' => 'password'
        ]);

        // dd($response);
        $response->assertSessionHasErrors(['email' => 'Désolé votre compte n\'est pas activé!']);
        $response->assertRedirect('/patient/login');
        $this->assertGuest('patient');
    }

    /** @test */
    public function remember_functionality_on_session_if_is_true_on_request_login() : void
    {
        $patient = $this->createPatient(null, ['email' => 'test@test.com']);
        
        $response = $this->post('/patient/login', [
            'email' => 'test@test.com',
            'password' => 'password',
            'remember' => 'on',
        ]);
        
        $response->assertRedirect('/patient/home');
        // cookie assertion goes here
        /** @var SessionGuard */
        $guard = Auth::guard('patient');
        $response->assertCookie($guard->getRecallerName(), vsprintf('%s|%s|%s', [
            $patient->id,
            $patient->getRememberToken(),
            $patient->password,
        ]));
        $this->assertAuthenticatedAs($patient, 'patient');
    }

    /** @test */
    public function logout_success_for_acting_patient() : void
    {
        $patient = $this->loginAsPatient();
        
        $this->assertAuthenticatedAs($patient, 'patient');
        
        $this->from('/patient/home')
        ->post('patient/logout')

        ->assertRedirect('/');
        $this->assertGuest('patient');
    }

    /** @test */
    public function access_logout_for_only_authenticate_patient() : void
    {        
        $this->assertGuest('patient');
        
        $this->post('/patient/logout')

        ->assertRedirect('/');
        $this->assertGuest('patient');
    }

}

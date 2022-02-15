<?php

namespace Tests\Feature\Patient;

use Carbon\Carbon;
use Hash;
use Tests\TestCase;

class AccountPatientTest extends TestCase
{
    /**
     * Test That patient cant acces page if not logged
     * 
     *  @test
     */
    public function patient_cant_access_profile_page_with_unauthenticate_state() : void
    {
        $this->get('/patient/account')

        ->assertStatus(302)
        ->assertRedirect('/patient/login');
    }

    /** @test */
    public function patient_can_access_account_page_if_authenticated() : void
    {
        $patient = $this->loginAsPatient();
        // vALIDATE PHONE NUMBER FOR PAIENT ACCESS
        $patient->update(['phone_verification_token' => null]);
        $this->get('/patient/account')

        ->assertOk();
    }

    /** @test */
    public function patient_can_access_to_edit_profil() : void
    {
        $patient = $this->loginAsPatient();
        // vALIDATE PHONE NUMBER FOR PAIENT ACCESS
        $patient->update(['phone_verification_token' => null]);

        $this->get('/patient/account/edit')
        ->assertOk();
    }

    /** @test */
    public function patient_update_validation_requires() : void
    {
        $patient = $this->loginAsPatient();
        // vALIDATE PHONE NUMBER FOR PAIENT ACCESS
        $patient->update(['phone_verification_token' => null]);

        $this->patch('/patient/account/update', [
            'first_name' => '',
            'last_name' => '',
            'birthday' => '',
            'address' => '',
        ])
        
        ->assertStatus(302)
        ->assertSessionHasErrors(['first_name', 'last_name', 'birthday', 'address']);
    }

    /** @test */
    public function patient_can_update_personal_info() : void
    {
        $patient = $this->loginAsPatient();
        $patient->update(['phone_verification_token' => null]);

        $this->patch('/patient/account/update', [
            'first_name' => 'Fatou',
            'last_name' => 'Mbaye',
            'birthday' => Carbon::now()->subYears(18)->toDateString(),
            'address' => 'XXX angle Y, Movistar',
        ])
        
        ->assertSessionHasNoErrors()
        ->assertSessionHas('success');
        $this->assertDatabaseHas('patients', [
            'first_name' => 'Fatou',
            'last_name' => 'Mbaye',
            'address' => 'XXX angle Y, Movistar',
        ]);
    }

    /** @test */
    public function patient_validation_email_on_update() : void
    {
        $patient = $this->loginAsPatient();
        // vALIDATE PHONE NUMBER FOR PAIENT ACCESS
        $patient->update(['phone_verification_token' => null]);

        $this->patch('/patient/account/email', [
            'email' => '',
        ])
        
        ->assertStatus(302)
        ->assertSessionHasErrors(['email']);
    }

    /** @test */
    public function patient_validate_unique_email_on_update() : void
    {
        $patient = $this->loginAsPatient();
        // vALIDATE PHONE NUMBER FOR PAIENT ACCESS
        $patient->update(['phone_verification_token' => null]);

        $patient_2 = $this->createPatient($this->createMedecin());
        $patient_2->update(['email' => 'test@test.com']);

        $this->patch('/patient/account/email', [
            'email' => 'test@test.com',
        ])
        
        ->assertStatus(302)
        ->assertSessionHasErrors(['email']);
    }

    /** @test */
    public function patient_can_update_email() : void
    {
        $patient = $this->loginAsPatient();
        // vALIDATE PHONE NUMBER FOR PAIENT ACCESS
        $patient->update(['phone_verification_token' => null]);

        $this->patch('/patient/account/email', [
            'email' => 'test@test.com',
        ])
        
        ->assertStatus(302)
        ->assertSessionHas('success');
        $this->assertDatabaseHas('patients', [
            'email' => 'test@test.com'
        ]);
    }

    /** @test */
    public function patient_validation_phone_on_update() : void
    {
        $patient = $this->loginAsPatient();
        // vALIDATE PHONE NUMBER FOR PAIENT ACCESS
        $patient->update(['phone_verification_token' => null]);

        $this->patch('/patient/account/phone', [
            'phone' => '',
        ])
        
        ->assertStatus(302)
        ->assertSessionHasErrors(['phone']);
    }

    /** @test */
    public function patient_validate_unique_phone_on_update() : void
    {
        $patient = $this->loginAsPatient();
        // vALIDATE PHONE NUMBER FOR PAIENT ACCESS
        $patient->update(['phone_verification_token' => null]);

        $patient_2 = $this->createPatient($this->createMedecin());
        $patient_2->update(['phone' => 778435053]);

        $this->patch('/patient/account/phone', [
            'phone' => 778435053,
        ])
        
        ->assertStatus(302)
        ->assertSessionHasErrors(['phone']);
    }

    /** @test */
    public function patient_can_update_phone() : void
    {
        $patient = $this->loginAsPatient();
        // vALIDATE PHONE NUMBER FOR PAIENT ACCESS
        $patient->update(['phone_verification_token' => null]);

        $this->patch('/patient/account/phone', [
            'phone' => 778435053,
        ])
        
        ->assertStatus(302)
        ->assertSessionHas('success');
        $this->assertDatabaseHas('patients', [
            'phone' => 778435053
        ]);
    }

    /** @test */
    public function patient_validation_password_on_update() : void
    {
        $patient = $this->loginAsPatient();
        // vALIDATE PHONE NUMBER FOR PAIENT ACCESS
        $patient->update(['phone_verification_token' => null]);

        $this->patch('/patient/account/password', [
            'current_password' => '',
            'password' => '',
            'password_confirmation' => '',
        ])
        
        ->assertStatus(302)
        ->assertSessionHasErrors(['current_password', 'password']);
    }

    /** @test */
    public function patient_validate_current_password_on_update() : void
    {
        $patient = $this->loginAsPatient();
        // vALIDATE PHONE NUMBER FOR PAIENT ACCESS
        $patient->update(['phone_verification_token' => null]);

        $this->patch('/patient/account/password', [
            'current_password' => 'xxxxxxxx',
            'password' => 'testpassword',
            'password_confirmation' => 'testpassword',
        ])

        ->assertStatus(302)
        ->assertSessionHasErrors(['current_password']);

    }

    /** @test */
    public function patient_validate_confirm_password_on_update() : void
    {
        $patient = $this->loginAsPatient();
        // vALIDATE PHONE NUMBER FOR PAIENT ACCESS
        $patient->update(['phone_verification_token' => null]);

        $this->patch('/patient/account/password', [
            'current_password' => 'password',
            'password' => 'testpassword-X',
            'password_confirmation' => 'testpassword-Y',
        ])

        ->assertStatus(302)
        ->assertSessionHasErrors(['password']);
    }

    /** @test */
    public function patient_can_update_password() : void
    {
        $patient = $this->loginAsPatient();
        // vALIDATE PHONE NUMBER FOR PAIENT ACCESS
        $patient->update(['phone_verification_token' => null]);

        $this->patch('/patient/account/password', [
            'current_password' => 'password',
            'password' => 'testpassword',
            'password_confirmation' => 'testpassword',
        ])
        
        ->assertStatus(302)
        ->assertSessionHas('success');
        $this->assertTrue(Hash::check('testpassword', $patient->refresh()->password));
    }

    /** @test */
    public function patient_can_delete_own_account() : void
    {
        $patient = $this->loginAsPatient();
        // vALIDATE PHONE NUMBER FOR PAIENT ACCESS
        $patient->update(['phone_verification_token' => null]);

        $this->delete('/patient/account/delete')

        ->assertStatus(302)
        ->assertRedirect('/');
        $this->assertFalse($patient->refresh()->is_active);
        $this->assertGuest('patient');
    }

}
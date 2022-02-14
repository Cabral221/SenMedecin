<?php

namespace Tests\Feature\Patient;

use Carbon\Carbon;
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

}
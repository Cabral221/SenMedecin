<?php

namespace Tests\Feature\Patient;

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

}
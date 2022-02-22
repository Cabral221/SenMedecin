<?php

namespace Tests\Feature\Patient;

use Tests\TestCase;

class AuthPatientTest extends TestCase
{
    /** @test */
    public function patient_are_blocked_if_account_is_not_active() : void
    {
        $patient = $this->createPatient();
        // vALIDATE PHONE NUMBER FOR PAIENT ACCESS
        $patient->update(['phone_verification_token' => null]);

        $this->get('/patient/home')
        ->assertRedirect('/');
    }
}

<?php

namespace Tests\Feature\Patient\Auth;

use Notification;
use Tests\TestCase;
use Illuminate\Support\Facades\DB;
use App\Notifications\ResetPassword;
use Illuminate\Support\Facades\Hash;
use Password;

class ForgetPasswordTest extends TestCase
{
    /** @test */
    public function patient_can_access_to_forget_password_page() : void
    {
        $this->get('/patient/password/reset')
        
        ->assertSuccessful()
        ->assertViewIs('patient.auth.passwords.email');

    }

    /** @test */
    public function patient_receives_email_with_the_password_reset_link() : void
    {
        Notification::fake();
        $patient = $this->createPatient();

        $this->from('/patient/password/reset')
        ->post('/patient/password/email', [
            'email' => $patient->email,
        ])
        
        ->assertRedirect('/patient/password/reset')
        ->assertSessionHas(['status']);

        $token = DB::table('password_resets')->first();
        
        $this->assertDatabaseHas('password_resets', ['email' => $patient->email]);
        Notification::assertSentTo($patient, ResetPassword::class, function ($notification, $channels) use ($token) {
            return Hash::check($notification->token, $token->token) === true;
        });
    }

    /** @test */
    public function patient_can_reset_password_with_password_reset_link() : void
    {
        $patient = $this->createPatient();
        $token = Password::createToken($patient);

        DB::insert('insert into password_resets (email, token) values (?, ?)', [$patient->email, $token]);

        $this->assertDatabaseHas('password_resets', ['email' => $patient->email]);
        
        $this->get("/patient/password/reset/{$token}")
        
        ->assertViewIs('patient.auth.passwords.reset')
        ->assertViewHas(['token', 'email']);

        $this->from("/patient/password/reset/{$token}")
        ->post('/patient/password/reset', [
            'token' => $token,
            'email' => $patient->email,
            'password' => 'newpassword',
            'password_confirmation' => 'newpassword',
        ])
        
        ->assertRedirect('/patient/home');
        $this->assertTrue(Hash::check('newpassword', $patient->fresh()->password));
        $this->assertAuthenticatedAs($patient, 'patient');
    }

}

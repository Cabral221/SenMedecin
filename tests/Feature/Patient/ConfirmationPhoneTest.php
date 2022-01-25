<?php

namespace Tests\Feature\Patient;

use App\Models\Patient;
use App\Notifications\PhoneVerification;
use Carbon\Carbon;
use Tests\TestCase;
use Illuminate\Support\Facades\Notification;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ConfirmationPhoneTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function when_a_patient_is_created_a_verification_phone_notification_will_be_sent() : void
    {
        Notification::fake();

        $this->loginAsMedecin();

        $this->post('/medecin/patients', [
            'patient_first_name' => 'John',
            'patient_last_name' => 'Doe',
            'patient_birthday' => Carbon::now()->subYears(rand(17,35)),
            'patient_address' => $this->faker->address,
            'patient_phone' =>  221782875971,
            'patient_email' => 'test@test.com',
            'patient_password' => 'password', 
            'patient_password_confirmation' => 'password',
            'patient_is_pregnancy' => false,
        ])

        ->assertSessionHas('success');

        $patient = Patient::where('email', 'test@test.com')->first();

        Notification::assertSentTo($patient, PhoneVerification::class);
    }

    /** @test */
    public function a_patiente_can_access_the_tampon_page() : void
    {
        $this->loginAsPatient();

        $response = $this->get('/patient/home');

        $response->assertRedirect('/patient/confirm-phone');
    }

    /** @test */
    public function a_patiente_cant_access_the_tampon_page_if_is_already_confirm_phone() : void
    {
        $patient = $this->loginAsPatient();
        
        $patient->update([
            'phone_verification_token' => null
        ]);

        $this->get('/patient/confirm-phone')

        ->assertStatus(302)
        ->assertRedirect('/patient/home');
    }

    /** @test */
    public function patient_validate_form_requires_validation_phone() : void
    {
        $this->loginAsPatient();

        $this->get('/patient/confirmphone?code=')
        
        ->assertSessionHasErrors(['code']);
    }

    /** @test */
    public function patient_validate_form_numeric_validation_phone() : void
    {
        $this->loginAsPatient();

        $this->get('/patient/confirmphone?code=azeaze')
        
        ->assertSessionHasErrors(['code']);
    }

    /** @test */
    public function patient_validate_form_length_validation_phone() : void
    {
        $this->loginAsPatient();

        $this->get('/patient/confirmphone?code=12345')
        
        ->assertSessionHasErrors(['code']);
    }

    /** @test */
    public function patient_confirm_with_not_corresponding_code() : void
    {
        $patient = $this->loginAsPatient();
        $patient->update([
            'phone_verification_token' => 123456,
        ]);

        $this->get('/patient/confirmphone?code=' . ($patient->phone_verification_token+1))

        ->assertSessionHasErrors(['code' => 'Désolé ! Le code saisi ne correspond pas.']);
    }

    /** @test */
    public function patient_confirm_with_right_corresponding_code() : void
    {
        $patient = $this->loginAsPatient();

        $this->get('/patient/confirmphone?code=' . $patient->phone_verification_token)

        ->assertSessionHasNoErrors()
        ->assertRedirect('/patient/home');
        $this->assertDatabaseHas('patients', [
            'phone' => $patient->phone,
            'phone_verification_token' => null
        ]);
    }

    /** @test */
    public function patient_can_ask_new_phone_verif_token() : void
    {
        // Etant donné : que je suis inscrite sans valider mon code
        Notification::fake();
        $patient = $this->loginAsPatient();
        $oldToken = $patient->phone_verification_token;

        $this->assertDatabaseHas('patients', [
            'first_name' => $patient->first_name,
            'email' => $patient->email,
            'phone' =>$patient->phone,
            'phone_verification_token' => $patient->phone_verification_token,
        ]);
        // Quand je suis à la page de confirmation du numero de telephone
        // Et que je demande un nouveau code
        $this->from('/patient/confirm-phone')->get('/patient/confirm-phone/resend')

        ->assertStatus(302)
        ->assertRedirect('/patient/confirm-phone')
        ->assertSessionHas('success');

        // le code dois etre changer en base donne
        $this->assertDatabaseMissing('patients', [
            'first_name' => $patient->first_name,
            'email' => $patient->email,
            'phone' =>$patient->phone,
            'phone_verification_token' => $oldToken
        ]);
        // et le notif sera envoye
        Notification::assertSentTo($patient, PhoneVerification::class);
    }
}

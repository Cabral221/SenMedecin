<?php

namespace Tests\Feature\Patient;

use Carbon\Carbon;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Notification;

class AvatarPatientTest extends TestCase
{
    /** @test */
    public function patient_avatar_upload_on_update() : void
    {
        $patient = $this->loginAsPatient();
        // vALIDATE PHONE NUMBER FOR PAIENT ACCESS
        $patient->update(['phone_verification_token' => null]);

        $this->assertNull($patient->getRawOriginal('avatar'));
        
        $file = new UploadedFile(
            base_path('tests') . '/fixtures/demo.png', 
            'demo.png','image/png',null,true
        );

        $response = $this->patch('/patient/account/avatar', [
            'avatar' => $file,
        ]);
        // dd($response->getContent());
        $response->assertStatus(302);
        $response->assertSessionHas(['success']);

        // Assert the file was stored...
        $this->assertDatabaseHas('patients', [
            'id' => $patient->fresh()->id,
            'avatar' => $patient->fresh()->getRawOriginal('avatar'),
        ]);

        $this->assertFileExists(Storage::disk('public')->path($patient->avatar));
        Storage::disk('public')->assertExists($patient->avatar);
    }

    /** @test */
    public function patient_avatar_attribute_have_default_value_on_create() : void
    {
        $medecin = $this->loginAsMedecin();
        Notification::fake();

        $this->post('/medecin/patients', [
            'patient_first_name' => 'John',
            'patient_last_name' => 'Doe',
            'patient_birthday' => Carbon::now()->subYears(rand(17,35)),
            'patient_address' => $this->faker->address,
            'patient_phone' =>  221778435052,
            'patient_email' => 'test@test.com',
            'patient_password' => 'password', 
            'patient_password_confirmation' => 'password',
            'patient_is_pregnancy' => true,
        ]);

        $this->assertDatabaseHas('patients', [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'test@test.com',
            'avatar' => null,
        ]);
        $patient = $medecin->patients()->first();
        $this->assertEquals('assets/img/brand/favicon-axxunjurel.svg', $patient->avatar);
    }

    // Delete patient delete file avatar
    /** @test */
    public function when_patient_are_deleted_avatar_file_will_delete() : void
    {
        $patient = $this->loginAsPatient();
        $data = ['id' => $patient->id];
        // vALIDATE PHONE NUMBER FOR PAIENT ACCESS
        $patient->update(['phone_verification_token' => null]);
        $file = new UploadedFile(
            base_path('tests') . '/fixtures/demo.png', 
            'demo.png','image/png',null,true
        );
        $this->patch('/patient/account/avatar', [
            'avatar' => $file,
        ]);

        $patient->delete();

        $this->assertDatabaseMissing('patients', $data);

        $this->assertFileDoesNotExist(Storage::disk('public')->path($patient->avatar));
        Storage::disk('public')->assertMissing($patient->avatar);
    }

    // Update avatar delete old file avatar
    /** @test */
    public function delete_old_avatar_file_on_update_new() : void
    {
        $patient = $this->loginAsPatient();
        // vALIDATE PHONE NUMBER FOR PAIENT ACCESS
        $patient->update(['phone_verification_token' => null]);
        
        $file = new UploadedFile(
            base_path('tests') . '/fixtures/demo.png', 
            'demo.png','image/png',null,true
        );
        $this->patch('/patient/account/avatar', [
            'avatar' => $file,
        ]);
        $this->assertFileExists(Storage::disk('public')->path($patient->avatar));
        
        $oldAvatar = $patient->avatar;
        
        $file = new UploadedFile(
            base_path('tests') . '/fixtures/demo1.png', 
            'demo1.png','image/png',null,true
        );
        $response = $this->patch('/patient/account/avatar', [
            'avatar' => $file,
        ]);

        $response->assertSessionHas(['success']);
        $this->assertFileDoesNotExist(Storage::disk('public')->path($oldAvatar));

    }

    // Patient can delete avtar
    /** @test */
    public function patient_can_delete_avatar() : void
    {
        $patient = $this->loginAsPatient();
        // vALIDATE PHONE NUMBER FOR PAIENT ACCESS
        $patient->update(['phone_verification_token' => null]);
        
        $file = new UploadedFile(
            base_path('tests') . '/fixtures/demo.png', 
            'demo.png','image/png',null,true
        );
        $this->patch('/patient/account/avatar', [
            'avatar' => $file,
        ]);

        $this->delete('/patient/account/avatar')
        ->assertStatus(302)
        ->assertSessionHas(['success']);
    }

}
<?php

namespace Tests\Feature\Medecin;

use Tests\TestCase;
use App\Models\Service;
use Illuminate\Http\UploadedFile;
use Illuminate\Testing\TestResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateMedecinTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_responsable_can_access_the_create_medecin_page() : void
    {
        $this->get('/partener/medecins/create')

        ->assertStatus(302)
        ->assertRedirect(route('responsable.login'));

        $this->loginAsResponsable();

        $this->get('/partener/medecins/create')

        ->assertOk();
    }

    /** @test */
    public function create_medecin_requires_validation() : void
    {
        $this->loginAsResponsable();

        $response = $this->post('/partener/medecins');

        $response->assertSessionHasErrors(['medecin_first_name','medecin_last_name','medecin_phone','medecin_email','medecin_password','medecin_service']);
    }

    /** @test */
    public function medecin_email_must_to_be_unique() : void
    {
        $responsable = $this->loginAsResponsable();

        $responsable->medecins()->create([
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'phone' =>  221778435052,
            'email' => 'test@test.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'service_id' => Service::create(['libele' => 'Maternité'])->id,
        ]);

        $this->post('/partener/medecins', [
            'medecin_email' => 'test@test.com',
        ])
        ->assertSessionHasErrors('medecin_email');
    }

    // medecin phone needs to be unique
    /** @test */
    public function medecin_phone_must_to_be_unique() : void
    {
        $this->loginAsResponsable();
        $service_id = Service::create(['libele' => 'Maternité'])->id;

        $this->post('/partener/medecins', [
            'medecin_first_name' => 'John',
            'medecin_last_name' => 'Doe',
            'medecin_phone' =>  221778435052,
            'medecin_email' => 'test1@test.com',
            'medecin_password' => 'password', 
            'medecin_password_confirmation' => 'password', 
            'medecin_service' => $service_id,
        ]);

        $this->assertDatabaseHas(
            'medecins',
            [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'test1@test.com',
            ]
        );

        $this->post('/partener/medecins', [
            'medecin_first_name' => 'John',
            'medecin_last_name' => 'Doe',
            'medecin_phone' =>  221778435052,
            'medecin_email' => 'test2@test.com',
            'medecin_password' => 'password', 
            'medecin_password_confirmation' => 'password', 
            'medecin_service' => $service_id,
        ])
        ->assertSessionHasErrors('medecin_phone');
    }

    /** @test */
    public function responsable_can_create_new_medecin() : void
    {
        $this->loginAsResponsable();

        $service_id = Service::create(['libele' => 'Maternité'])->id;

        /** @var TestResponse $response */
        $response = $this->post('/partener/medecins', [
            'medecin_first_name' => 'John',
            'medecin_last_name' => 'Doe',
            'medecin_phone' =>  221778435052,
            'medecin_email' => 'test@test.com',
            'medecin_password' => 'password', 
            'medecin_password_confirmation' => 'password', 
            'medecin_service' => $service_id,
        ]);

        $this->assertDatabaseHas(
            'medecins',
            [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'test@test.com',
                'phone' => 221778435052,
                'service_id' => $service_id,
            ]
        );

        $response->assertSessionHas('success');
        $response->assertRedirect('/partener/medecins');
    }

    /** @test */
    public function medecin_avatar_upload() : void
    {
        $responsable = $this->loginAsResponsable();
        $service_id = Service::create(['libele' => 'Maternité'])->id;

        $file = new UploadedFile(
            base_path('tests') . '/fixtures/demo.png', 
            'demo.png','image/png',null,true
        );

        $this->post('/partener/medecins', [
            'medecin_avatar' => $file,
            'medecin_first_name' => 'John',
            'medecin_last_name' => 'Doe',
            'medecin_phone' =>  221778435052,
            'medecin_email' => 'test@test.com',
            'medecin_password' => 'password', 
            'medecin_password_confirmation' => 'password', 
            'medecin_service' => $service_id,
        ])

        ->assertSessionHas('success')
        ->assertStatus(302);
        $medecin = $responsable->medecins()->first();
        // Assert the file was stored...
        $this->assertDatabaseHas('medecins', [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'test@test.com',
            'avatar' => $medecin->avatar,
        ]);
        $this->assertFileExists(Storage::disk('public')->path($medecin->avatar));
        Storage::disk('public')->assertExists($medecin->avatar);
    }

    /** @test */
    public function medecin_avatar_attribute_have_default_value() : void
    {
        $responsable = $this->loginAsResponsable();
        $service_id = Service::create(['libele' => 'Maternité'])->id;

        $this->post('/partener/medecins', [
            'medecin_avatar' => null,
            'medecin_first_name' => 'John',
            'medecin_last_name' => 'Doe',
            'medecin_phone' =>  221778435052,
            'medecin_email' => 'test@test.com',
            'medecin_password' => 'password', 
            'medecin_password_confirmation' => 'password', 
            'medecin_service' => $service_id,
        ]);

        $this->assertDatabaseHas('medecins', [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'test@test.com',
            'avatar' => null,
        ]);
        $medecin = $responsable->medecins()->first();
        $this->assertEquals('assets/img/brand/favicon-axxunjurel.svg', $medecin->avatar);
    }

}

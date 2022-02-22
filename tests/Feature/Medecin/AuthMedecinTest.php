<?php

namespace Tests\Feature\Medecin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthMedecinTest extends TestCase
{
    use RefreshDatabase;

    // medecin can view a login form
    /** @test */
    public function medecin_can_view_a_login_form() : void
    {
        $response = $this->get('/medecin/login');

        $response->assertSuccessful();
        $response->assertViewIs('medecin.auth.login');
    }

    // medecin cannot view a login form when authenticated
    /** @test */
    public function medecin_cannot_view_a_login_form_when_authenticated() : void
    {
        $medecin = $this->createMedecin();
        $response = $this->actingAs($medecin, 'medecin')->get('/medecin/login');

        $response->assertRedirect('/medecin/home');
    }

    // medecin can login with correct credentials
    /** @test */
    public function medecin_can_login_with_correct_credentials() : void
    {
        $medecin = $this->createMedecin();

        $response = $this->post('/medecin/login', [
            'email' => $medecin->email,
            'password' => 'password',
        ]);

        $response->assertRedirect('/medecin/home');
        $this->assertAuthenticatedAs($medecin, 'medecin');
    }

    // medecin gets a correct remember-me cookie, if chooses to be remembered
    /** @test */
    public function medecin_get_correct_remember_me_cookie() : void
    {
        $medecin = $this->createMedecin();
        $response = $this->post('/medecin/login', [
            'email' => $medecin->email,
            'password' => 'password',
            'remember' => 'on',
        ]);

        $response->assertRedirect('/medecin/home');
        // 2 : is the position of remmber cookie in  session header
        $this->assertStringStartsWith('remember_medecin_', $response->headers->getCookies()[2]->getName());
        $this->assertAuthenticatedAs($medecin, 'medecin');

    }

    // medecin cannot login with a non-existent email
    /** @test */
    public function mededcin_cannot_login_with_a_non_existing_email() : void
    {
        $response = $this->from('/medecin/login')->post('/medecin/login', [
            'email' => 'aze@aze.test',
            'password' => 'justpassword',
        ]);

        $response->assertRedirect('/medecin/login');
        $response->assertSessionHasErrors('email');
        $this->assertTrue(session()->hasOldInput('email'));
        $this->assertFalse(session()->hasOldInput('password'));
        $this->assertGuest('medecin');
    }
    
    // medecin cannot login with incorrect password
    /** @test */
    public function medecin_cannot_login_with_incorrect_password() : void
    {
        $medecin = $this->createMedecin();
        
        $response = $this->from('/medecin/login')->post('/medecin/login', [
            'email' => $medecin->email,
            'password' => 'invalid-password',
        ]);
        
        $response->assertRedirect('/medecin/login');
        $response->assertSessionHasErrors('email');
        $this->assertTrue(session()->hasOldInput('email'));
        $this->assertFalse(session()->hasOldInput('password'));
        $this->assertGuest('medecin');
    }
    
    // medecin can logout, when already authenticated
    /** @test */
    public function medecin_can_logout_when_already_authenticated() : void
    {
        $this->loginAsMedecin();
        $this->assertAuthenticated('medecin');
        
        $response = $this->post('/medecin/logout');

        $response->assertRedirect('/');
        $this->assertGuest('medecin');
    } 

    // medecin cannot attempt to login more than five times in one minute (default behavior)
    // TODO ...
}

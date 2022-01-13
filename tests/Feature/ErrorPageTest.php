<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ErrorPageTest extends TestCase
{
    use RefreshDatabase;

    // Tester la page d'erreur 404
    /** @test */
    public function not_found_error_return_own_page_customized() : void
    {
        $response = $this->get('/azeaze');

        $response->assertStatus(404);
    }

    // Tester la page d'erreur 500
    /** @test */
    public function server_error_return_own_page_customized() : void
    {
        // ...
    }
}

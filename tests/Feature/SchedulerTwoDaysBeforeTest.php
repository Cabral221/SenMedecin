<?php

namespace Tests\Feature;

use Tests\TestCase;

class SchedulerTwoDaysBeforeTest extends TestCase
{
    /**
     * @test
     *
     * @return void
     */
    public function basicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}

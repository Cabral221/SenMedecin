<?php

namespace Tests;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, RefreshDatabase;

    public function setUp() : void
    {
        parent::setUp();
        Artisan::call('migrate');
        $this->cleanDirectories();
    }

    public function cleanDirectories()
    {
        Storage::disk('public')->deleteDirectory('uploads');
    }

}

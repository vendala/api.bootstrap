<?php

namespace Tests;

use Illuminate\Contracts\Console\Kernel;

/**
 * Trait CreatesApplication.
 *
 * @package Tests
 */
trait CreatesApplication
{
    /**
     * Creates the application.
     *
     * @return \Laravel\Lumen\Application
     */
    public function createApplication()
    {
        return require __DIR__.'/../bootstrap/app.php';
    }
}

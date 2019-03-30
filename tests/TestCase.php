<?php

namespace Tests;

use ReflectionClass;
use ReflectionProperty;
use Laravel\Lumen\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    /**
     * Creates the application.
     *
     * @return \Laravel\Lumen\Application
     */
    public function createApplication(): \Laravel\Lumen\Application
    {
        return require __DIR__.'/../bootstrap/app.php';
    }

    /**
     * @param \ReflectionClass $reflector
     * @param string
     *
     * @return \ReflectionProperty
     *
     * @throws \ReflectionException
     */
    public function getProperty(ReflectionClass $reflector, string $property_name): ReflectionProperty
    {
        $property = $reflector->getProperty($property_name);
        $property->setAccessible(true);

        return $property;
    }
}

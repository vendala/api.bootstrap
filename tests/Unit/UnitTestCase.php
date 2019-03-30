<?php

namespace Tests\Unit;

use Tests\TestCase;

/**
 * Class UnitTestCase
 *
 * @package Tests\Unit
 */
abstract class UnitTestCase extends TestCase
{
    /**
     * @test
     *
     * @throws \ReflectionException
     */
    abstract public function testSituationClass(): void;
}

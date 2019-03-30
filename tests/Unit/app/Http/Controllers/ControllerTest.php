<?php

namespace Tests\Unit\app\Http\Controllers;

use Tests\Unit\UnitTestCase;

/**
 * Class BaseControllerTest.
 *
 * @package Tests\Unit\app\Http\Controllers
 */
class ControllerTest extends UnitTestCase
{
    /**
     * @test
     *
     * @throws \ReflectionException
     */
    public function testSituationClass(): void
    {
        $class = new \ReflectionClass(\App\Http\Controllers\Controller::class);
        $traits = class_uses(\App\Http\Controllers\Controller::class);


        $this->assertIsArray($traits);
        $this->assertEmpty($traits);
        $this->assertEquals([], $traits);
        $this->assertTrue($class->isAbstract());

        $this->assertInstanceOf(
            \Laravel\Lumen\Routing\Controller::class,
            $this->getMockForAbstractClass(\App\Http\Controllers\Controller::class)
        );
    }
}

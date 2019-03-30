<?php

namespace Tests\Unit\app\Http\Controllers\Api\V1;

use Tests\Unit\UnitTestCase;

/**
 * Class V1ControllerTest
 *
 * @package Tests\Unit\app\Http\Controllers\Api\V1
 */
class V1ControllerTest extends UnitTestCase
{
    /**
     * @test
     *
     * @throws \ReflectionException
     */
    public function testSituationClass(): void
    {
        $class = new \ReflectionClass(\App\Http\Controllers\V1Controller::class);
        $traits = class_uses(\App\Http\Controllers\V1Controller::class);

        $this->assertIsArray($traits);
        $this->assertEmpty($traits);
        $this->assertEquals([], $traits);

        $this->assertTrue($class->isAbstract());

        $this->assertInstanceOf(
            \App\Http\Controllers\ApiController::class,
            $this->getMockForAbstractClass(\App\Http\Controllers\V1Controller::class)
        );
    }
}

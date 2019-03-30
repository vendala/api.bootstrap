<?php

namespace Tests\Unit\app\Http\Controllers\Api;

use Tests\Unit\UnitTestCase;

/**
 * Class ApiControllerTest
 *
 * @package Tests\Unit\app\Http\Controllers\Api
 */
class ApiControllerTest extends UnitTestCase
{
    /**
     * @test
     *
     * @throws \ReflectionException
     */
    public function testSituationClass(): void
    {
        $class = new \ReflectionClass(\App\Http\Controllers\ApiController::class);
        $traits = class_uses(\App\Http\Controllers\ApiController::class);

        $this->assertIsArray($traits);
        $this->assertNotEmpty($traits);
        $this->assertArrayHasKey(\Dingo\Api\Routing\Helpers::class, $traits);
        $this->assertEquals([\Dingo\Api\Routing\Helpers::class => \Dingo\Api\Routing\Helpers::class], $traits);

        $this->assertTrue($class->isAbstract());

        $this->assertInstanceOf(
            \App\Http\Controllers\Controller::class,
            $this->getMockForAbstractClass(\App\Http\Controllers\ApiController::class)
        );
    }
}
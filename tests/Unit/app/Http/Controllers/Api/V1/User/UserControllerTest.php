<?php

namespace Tests\Unit\app\Http\Controllers\Api\V1\User;

use Tests\Unit\UnitTestCase;

/**
 * Class UserControllerTest
 *
 * @package Tests\Unit\app\Http\Controllers\Api\User
 */
class UserControllerTest extends UnitTestCase
{

    /**
     * @test
     *
     * @throws \ReflectionException
     */
    public function testSituationClass(): void
    {
        $class = new \ReflectionClass(\App\Http\Controllers\Api\V1\User\UserController::class);
        $traits = class_uses(\App\Http\Controllers\Api\V1\User\UserController::class);

        $this->assertIsArray($traits);
        $this->assertEmpty($traits);
        $this->assertEquals([], $traits);

        $this->assertTrue($class->isAbstract());

        $this->assertInstanceOf(
            \App\Http\Controllers\V1Controller::class,
            $this->getMockForAbstractClass(\App\Http\Controllers\Api\V1\User\UserController::class)
        );
    }
}
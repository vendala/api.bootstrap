<?php

namespace Tests\Unit\app\Http\Controllers\Api\V1\User;

use Tests\Unit\UnitTestCase;

/**
 * Class StorageControllerTest
 *
 * @package Tests\Unit\app\Http\Controllers\Api\V1\User
 */
class StorageControllerTest extends UnitTestCase
{
    /**
     * @test
     *
     * @throws \ReflectionException
     */
    public function testSituationClass(): void
    {
        $class = new \ReflectionClass(\App\Http\Controllers\Api\V1\User\StorageController::class);
        $traits = class_uses(\App\Http\Controllers\Api\V1\User\StorageController::class);

        $this->assertIsArray($traits);
        $this->assertEmpty($traits);
        $this->assertEquals([], $traits);

        $this->assertFalse($class->isAbstract());

        $this->assertInstanceOf(
            \App\Http\Controllers\Api\V1\User\UserController::class,
            $this->getMockForAbstractClass(\App\Http\Controllers\Api\V1\User\StorageController::class)
        );
    }
}
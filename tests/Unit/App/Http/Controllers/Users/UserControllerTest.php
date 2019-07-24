<?php

namespace Tests\Unit\App\Http\Controllers\Users;

use Tests\TestCase;
use App\Http\Controllers\User\UserController;

/**
 * Class UserControllerTest
 *
 * @package Tests\Unit\App\Http\Controllers\Users
 */
class UserControllerTest extends TestCase
{
    /**
     * @test
     */
    public function using_traits(): void
    {
        $usingTraits = class_uses(UserController::class);

        $this->assertIsArray($usingTraits);
        $this->assertEquals([], $usingTraits);
    }

    /**
     * @test
     */
    public function instance_off()
    {
        $mockUserController = $this->getMockForAbstractClass(UserController::class);
        $this->assertInstanceOf(\App\Http\Controllers\User\UserController::class, $mockUserController);
    }
}

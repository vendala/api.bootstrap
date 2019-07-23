<?php

namespace Tests\Unit\App\Http\Controllers;

use Tests\TestCase;

/**
 * Class ControllerTest
 *
 * @package Tests\Unit\App\Http\Controllers
 */
class ControllerTest extends TestCase
{
    /**
     * @test
     */
    public function using_trait()
    {
        $traitUses = class_uses(\App\Http\Controllers\BaseController::class);

        $this->assertIsArray($traitUses);
        $this->assertArrayHasKey(\Dingo\Api\Routing\Helpers::class, $traitUses);

        $traits = [\Dingo\Api\Routing\Helpers::class => \Dingo\Api\Routing\Helpers::class];

        $this->assertEquals($traits, $traitUses);
    }

    /**
     * @test
     *
     * @throws \ReflectionException
     */
    public function instance_off()
    {
        $mock = $this->getMockForAbstractClass(\App\Http\Controllers\BaseController::class);

        $this->assertInstanceOf(\Laravel\Lumen\Routing\Controller::class, $mock);
    }
}

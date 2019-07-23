<?php

namespace Tests\Unit\App\Http\Controllers;

use App\Http\Controllers\PingPongController;
use Tests\TestCase;

/**
 * Class PingPongControllerTest.
 *
 * @package Tests\Unit\App\Http\Controllers
 */
class PingPongControllerTest extends TestCase
{
    /**
     * @var \App\Http\Controllers\PingPongController
     */
    private $pingPongCotroller;

    /**
     * Setup the test environment.
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->pingPongCotroller = new PingPongController();
    }

    /**
     * @test
     */
    public function using_traits(): void
    {
        $usingTraits = class_uses($this->pingPongCotroller);

        $this->assertIsArray($usingTraits);
        $this->assertEquals([], $usingTraits);
    }

    /**
     * @test
     */
    public function instance_off()
    {
        $this->assertInstanceOf(\App\Http\Controllers\BaseController::class, $this->pingPongCotroller);
    }

    /**
     * @test
     */
    public function invoke(): void
    {
        $this->assertInstanceOf(\Dingo\Api\Http\Response::class, $this->pingPongCotroller->__invoke());
        $this->assertEquals($this->pingPongCotroller->response->noContent(), $this->pingPongCotroller->__invoke());
    }
}

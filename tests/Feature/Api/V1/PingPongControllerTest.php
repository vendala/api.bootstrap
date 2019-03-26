<?php

namespace Tests\Feature\Api\V1;

use Tests\Feature\FeatureTestCase;

/**
 * Class PingPongControllerTest.
 *
 * @package Tests\Feature\Api\V1
 */
class PingPongControllerTest extends FeatureTestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testIfApplicationIsWorking()
    {
        $response = $this->json(self::GET,'/ping-pong');

        $this->assertResponseStatus($response->getStatusCode());

        $this->assertEmpty($response->getContent());
    }
}
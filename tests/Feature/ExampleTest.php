<?php

namespace Tests\Feature;


/**
 * Class ExampleTest.
 *
 * @package Tests\Feature
 */
class ExampleTest extends FeatureTestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->json('GET', '/');
        $this->assertEquals(200, $this->response->getStatusCode());
    }
}

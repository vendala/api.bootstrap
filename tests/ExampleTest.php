<?php
namespace Tests;

use Tests\Feature\FeatureTestCase;
use Tests\Feature\JsonRequest;

/**
 * Class ExampleTest.
 *
 * @package Tests
 */
class ExampleTest extends FeatureTestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->json(JsonRequest::GET, '/');
        $this->assertEquals(
            $this->app->version(), $this->response->getContent()
        );
    }
}

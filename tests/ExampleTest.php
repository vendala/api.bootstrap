<?php

namespace Tests;

 /**
 * Class ExampleTest.
 *
 * @package Tests
 */
class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function _testExample()
    {
        $this->get('/');

        $this->assertEquals(
            $this->app->version(), $this->response->getContent()
        );
    }
}

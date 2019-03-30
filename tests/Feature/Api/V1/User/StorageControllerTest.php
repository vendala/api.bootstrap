<?php

namespace Tests\Feature\Api\V1\User;

use Tests\Feature\FeatureTestCase;
use Laravel\Lumen\Testing\DatabaseMigrations;
use Faker\Factory;


/**
 * Class StorageControllerTest.
 *
 * @package Tests\Feature\Api\V1\User
 */
class StorageControllerTest extends FeatureTestCase
{
    use DatabaseMigrations;

    public function testIfCreateUserWithSuccess()
    {
        dd(app('db.factory')->name);
        $bodyRequest = [
            app('db.factory')->name
        ];
    }
}

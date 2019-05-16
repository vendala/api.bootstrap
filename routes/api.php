<?php

/** @var Laravel\Lumen\Routing\Router $router */
$router;

/** @var Dingo\Api\Routing\Router $api */
$api;

$api->group(['namespace' => 'User', 'prefix' => '/users'], function (\Dingo\Api\Routing\Router $api) {
    $api->post('/', ['as' => 'users.storage', 'uses' => 'StorageController']);
});

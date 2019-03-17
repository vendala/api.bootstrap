<?php

/** @var Laravel\Lumen\Routing\Router $router */
$router;

/** @var Dingo\Api\Routing\Router $api */
$api;

$api->get('/ping-pong', ['as' => 'ping-pong', 'uses' => 'PingPongController@__invoke']);

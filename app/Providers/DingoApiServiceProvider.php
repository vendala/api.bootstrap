<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class DingoApiServiceProvider.
 *
 * @package App\Providers
 */
class DingoApiServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
//        $this->authentications();
        $this->rateLimit();
//        $this->responseTransformer();
        $this->responseFormat();
        $this->errorFormat();
    }

    private function authentications(): void
    {
        $this->app['Dingo\Api\Auth\Auth']->extend('oauth', function () {
            return new \Dingo\Api\Auth\Provider\JWT($this->app['Tymon\JWTAuth\JWTAuth']);
        });
    }

    private function rateLimit(): void
    {
        $this->app['Dingo\Api\Http\RateLimit\Handler']->extend(function () {
            return new \Dingo\Api\Http\RateLimit\Throttle\Authenticated;
        });
    }

    private function responseTransformer(): void
    {
        $this->app['Dingo\Api\Transformer\Factory']->setAdapter(function () {
            $fractal = new \League\Fractal\Manager;

            $fractal->setSerializer(new \League\Fractal\Serializer\JsonApiSerializer);

            return new \Dingo\Api\Transformer\Adapter\Fractal($fractal);
        });
    }

    private function responseFormat(): void
    {
        \Dingo\Api\Http\Response::addFormatter('json', new \Dingo\Api\Http\Response\Format\Jsonp);
    }

    private function errorFormat(): void
    {
        $this->app['Dingo\Api\Exception\Handler']->setErrorFormat([
            'error' => [
                'message' => ':message',
                'errors' => ':errors',
                'code' => ':code',
                'status_code' => ':status_code',
                'debug' => ':debug'
            ]
        ]);
    }
}

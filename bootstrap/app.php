<?php

require_once __DIR__.'/../vendor/autoload.php';

(new Laravel\Lumen\Bootstrap\LoadEnvironmentVariables(
    dirname(__DIR__)
))->bootstrap();

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| Here we will load the environment and create the application instance
| that serves as the central piece of this framework. We'll use this
| application as an "IoC" container and router for this framework.
|
*/

$app = new Laravel\Lumen\Application(
    dirname(__DIR__)
);

// $app->withFacades();

$app->withEloquent();
$app->make('db')->enableQueryLog();

/*
|--------------------------------------------------------------------------
| Register Container Bindings
|--------------------------------------------------------------------------
|
| Now we will register a few bindings in the service container. We will
| register the exception handler and the console kernel. You may add
| your own bindings here if you like or you can make another file.
|
*/

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

/*
|--------------------------------------------------------------------------
| Register Middleware
|--------------------------------------------------------------------------
|
| Next, we will register the middleware with the application. These can
| be global middleware that run before and after each request into a
| route or middleware that'll be assigned to some specific routes.
|
*/

 $app->middleware([
     Barryvdh\Cors\HandleCors::class,
 ]);

$app->routeMiddleware([
   'auth' => App\Http\Middleware\Authenticate::class,
]);

/*
|--------------------------------------------------------------------------
| Register Service Providers
|--------------------------------------------------------------------------
|
| Here we will register all of the application's service providers which
| are used to bind services into the container. Service providers are
| totally optional, so you are not required to uncomment this line.
|
*/

// $app->register(App\Providers\AppServiceProvider::class);
 $app->register(App\Providers\EventServiceProvider::class);

$app->register(App\Providers\AuthServiceProvider::class);
$app->register(Tymon\JWTAuth\Providers\LumenServiceProvider::class);

$app->register(Dingo\Api\Provider\LumenServiceProvider::class);
$app->register(App\Providers\DingoApiServiceProvider::class);
$app->register(Prettus\Repository\Providers\LumenRepositoryServiceProvider::class);
$app->register(Rap2hpoutre\LaravelLogViewer\LaravelLogViewerServiceProvider::class);
$app->register(App\Providers\IdeHelperServiceProvider::class);
$app->register(Barryvdh\Cors\ServiceProvider::class);
$app->register(App\Providers\RepositoryServiceProvider::class);
$app->register(Illuminate\Notifications\NotificationServiceProvider::class);
$app->register(Illuminate\Mail\MailServiceProvider::class);
$app->register(Creativeorange\Gravatar\GravatarServiceProvider::class);

/*
|--------------------------------------------------------------------------
| Register Configs
|--------------------------------------------------------------------------
|
*/

$app->configure('api');
$app->configure('auth');
$app->configure('mail');
$app->configure('gravatar');
$app->configure('repository');
$app->configure('filesystems');

/*
|--------------------------------------------------------------------------
| Register Alias
|--------------------------------------------------------------------------
|
*/

$app->alias('mailer', Illuminate\Mail\Mailer::class);
$app->alias('mailer', Illuminate\Contracts\Mail\Mailer::class);
$app->alias('mailer', Illuminate\Contracts\Mail\MailQueue::class);

/*
|--------------------------------------------------------------------------
| Load The Application Routes
|--------------------------------------------------------------------------
|
| Next we will include the routes file so that they can all be added to
| the application. This will provide all of the URLs the application
| can respond to, as well as the controllers that may handle them.
|
*/

$app->router->group([
    'namespace' => 'App\Http\Controllers\Web',
], function ($router) {
    require __DIR__.'/../routes/web.php';
});

$app->router->group([
    'namespace' => 'App\Http\Controllers\Api',
], function ($router) use ($app) {
    $api = $app->make(Dingo\Api\Routing\Router::class);

    $api->version('v1', function ($api) {
        $api->group(['namespace' => 'App\Http\Controllers'], function ($api) {
            require __DIR__.'/../routes/api.php';
        });
    });
});

$app->router->group(['namespace' => '\Rap2hpoutre\LaravelLogViewer'
], function($router) {
    $router->get('logs', 'LogViewerController@index');
});

return $app;

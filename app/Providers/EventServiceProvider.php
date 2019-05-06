<?php

namespace App\Providers;

use Laravel\Lumen\Providers\EventServiceProvider as ServiceProvider;

/**
 * Class EventServiceProvider.
 *
 * @package App\Providers
 */
class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        \App\Events\Api\V1\User\StorageEvent::class => [
//            \App\Listeners\Api\V1\User\StorageProfileListener::class,
//            \App\Listeners\Api\V1\User\FindAndSaveGravatarListener::class,
//            \App\Listeners\Api\V1\User\SendMailVerifyListener::class,
        ]
    ];
}

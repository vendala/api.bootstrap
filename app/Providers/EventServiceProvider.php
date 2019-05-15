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
        \App\Events\User\UserSavedEvent::class => [
            \App\Listeners\User\StorageProfileListener::class,
            \App\Listeners\User\FindAndSaveGravatarListener::class,
//            \App\Listeners\User\SendMailVerifyListener::class,
        ]
    ];
}

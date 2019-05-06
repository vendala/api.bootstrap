<?php

namespace App\Listeners\Api\V1\User;

use App\Events\Api\V1\User\UserSavedEvent;
use App\Listeners\Api\V1\User\Contracts\UserListener;

/**
 * Class StorageProfileListener
 *
 * @package App\Listeners\Api\V1\User
 */
class StorageProfileListener implements UserListener
{
    /**
     * @param \App\Events\Api\V1\User\UserSavedEvent $user
     *
     * @return mixed
     */
    public function handle(UserSavedEvent $event)
    {
        $user = $event->getUser();

        $user->profile()->create();
    }
}

<?php

namespace App\Listeners\Api\V1\User\Contracts;

use App\Events\Api\V1\User\UserSavedEvent;

/**
 * Interface UserListener.
 *
 * @package App\Listeners\Api\V1\User\Contracts
 */
interface UserListener
{
    /**
     * @param \App\Events\Api\V1\User\UserSavedEvent $user
     *
     * @return mixed
     */
    public function handle(UserSavedEvent $user);
}

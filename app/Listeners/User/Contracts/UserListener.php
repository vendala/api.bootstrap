<?php

namespace App\Listeners\User\Contracts;

use App\Events\User\UserSavedEvent;

/**
 * Interface UserListener.
 *
 * @package App\Listeners\User\Contracts
 */
interface UserListener
{
    /**
     * @param \App\Events\User\UserSavedEvent $user
     *
     * @return mixed
     */
    public function handle(UserSavedEvent $user);
}

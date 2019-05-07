<?php

namespace App\Events\User;

use App\Events\Event;
use App\Entities\User;

/**
 * Class StorageEvent.
 *
 * @package App\Events\User
 */
class UserSavedEvent extends Event
{
    /**
     * @var \App\Entities\User
     */
    private $user;

    /**
     * StorageEvent constructor.
     *
     * @param \App\Entities\User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return \App\Entities\User
     */
    public function getUser(): User
    {
        return $this->user;
    }
}

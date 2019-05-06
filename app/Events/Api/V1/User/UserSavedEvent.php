<?php

namespace App\Events\Api\V1\User;

use App\Entities\User;
use App\Events\Event;

/**
 * Class StorageEvent.
 *
 * @package App\Events\Api\V1\User
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

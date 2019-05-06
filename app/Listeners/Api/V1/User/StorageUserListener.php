<?php

namespace App\Listeners\Api\V1\User;

use App\Entities\User;
use App\Events\Api\V1\User\UserSavedEvent;
use App\Repositories\Contracts\UserRepository;
use Illuminate\Contracts\Hashing\Hasher as Hash;

/**
 * Class StorageUserListener.
 *
 * @package App\Listeners\Api\V1\User
 */
class StorageUserListener
{
    /**
     * @var \App\Repositories\Contracts\UserRepository
     */
    private $user_repository;

    /**
     * @var \Illuminate\Contracts\Hashing\Hasher
     */
    private $hash;

    /**
     * StorageUserListener constructor.
     *
     * @param \App\Repositories\Contracts\UserRepository $user_repository
     * @param \Illuminate\Contracts\Hashing\Hasher $hash
     */
    public function __construct(UserRepository $user_repository, Hash $hash)
    {
        $this->user_repository = $user_repository;
        $this->hash = $hash;
    }

    /**
     * Handle the event.
     *
     * @param \App\Events\Api\V1\User\UserSavedEvent $event
     *
     * @return \App\Entities\User
     */
    public function handle(UserSavedEvent $event): User
    {
        return $this->user_repository->create($this->structureUser($event));
    }

    /**
     * @param \App\Events\Api\V1\User\UserSavedEvent $event .
     *
     * @return array
     */
    private function structureUser(UserSavedEvent $event): array
    {
        return [
            'name' => $event->getName(),
            'email' => $event->getEmail(),
            'password' => $this->hash->make($event->getPassword())
        ];
    }
}

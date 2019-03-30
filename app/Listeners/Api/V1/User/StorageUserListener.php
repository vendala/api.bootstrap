<?php

namespace App\Listeners\Api\V1\User;

use App\Events\Api\V1\User\StorageEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Repositories\Contracts\UserRepository;

/**
 * Class StorageUserListener.
 *
 * @package App\Listeners\Api\V1\User
 */
class StorageUserListener implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * @var \App\Repositories\Contracts\UserRepository
     */
    private $user_repository;

    /**
     * StorageUserListener constructor.
     *
     * @param \App\Repositories\Contracts\UserRepository $user_repository
     */
    public function __construct(UserRepository $user_repository)
    {
        $this->user_repository = $user_repository;
    }

    /**
     * Handle the event.
     *
     * @param \App\Events\Api\V1\User\StorageEvent $event
     *
     * @return void
     */
    public function handle(StorageEvent $event): void
    {

    }

    /**
     * Handle a job failure.
     *
     * @param \App\Events\Api\V1\User\StorageEvent $event
     * @param \Exception  $exception
     *
     * @return void
     */
    public function failed(StorageEvent $event, $exception): void
    {
        //
    }
}

<?php

namespace App\Listeners\User;

use App\Entities\Profile;
use App\Events\User\UserSavedEvent;
use App\Listeners\User\Contracts\UserListener;
use App\Repositories\Contracts\ProfileRepository;

/**
 * Class StorageProfileListener
 *
 * @package App\Listeners\User
 */
class StorageProfileListener implements UserListener
{
    /**
     * @var \App\Repositories\Contracts\ProfileRepository
     */
    private $profileRepository;

    /**
     * StorageProfileListener constructor.
     *
     * @param \App\Repositories\Contracts\ProfileRepository $profileRepository
     */
    public function __construct(ProfileRepository $profileRepository)
    {
        $this->profileRepository = $profileRepository;
    }

    /**
     * @param \App\Events\User\UserSavedEvent $userSavedEvent
     *
     * @return \App\Entities\Profile
     */
    public function handle(UserSavedEvent $userSavedEvent): Profile
    {
        $user = $userSavedEvent->getUser();

        $profile = $this->profileRepository->createProfileByUserId($user->id);

        return $profile;
    }
}

<?php

namespace App\Listeners\User;

use App\Entities\Profile;
use App\Events\User\UserSavedEvent;
use Creativeorange\Gravatar\Gravatar;
use App\Repositories\Contracts\ProfileRepository;

/**
 * Class FindAndSaveGravatarListener.
 *
 * @package App\Listeners\User
 */
class FindAndSaveGravatarListener
{
    /**
     * @var \Creativeorange\Gravatar\Gravatar
     */
    private $gravatar;

    /**
     * @var \App\Repositories\Contracts\ProfileRepository
     */
    private $profileRepository;

    /**
     * FindAndSaveGravatarListener constructor.
     *
     * @param \Creativeorange\Gravatar\Gravatar             $gravatar
     * @param \App\Repositories\Contracts\ProfileRepository $profileRepository
     */
    public function __construct(Gravatar $gravatar, ProfileRepository $profileRepository)
    {
        $this->gravatar = $gravatar;
        $this->profileRepository = $profileRepository;
    }

    /**
     * @param \App\Events\User\UserSavedEvent $userSavedEvent
     * @return mixed
     *
     * @throws \Creativeorange\Gravatar\Exceptions\InvalidEmailException
     */
    public function handle(UserSavedEvent $userSavedEvent): Profile
    {
        $user = $userSavedEvent->getUser();

        $avatarUrl = $this->gravatar->get($user->email);

        $profile = $this->profileRepository->update([
            'avatar' => $avatarUrl
        ], $user->profile->id);

        return $profile;
    }
}

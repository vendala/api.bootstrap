<?php

namespace App\Repositories\Contracts;

use App\Entities\Profile;
use App\Supports\Repositories\Contracts\Repository;

/**
 * Interface ProfileRepository.
 *
 * @package namespace App\Repositories\Contracts;
 */
interface ProfileRepository extends Repository
{
    /**
     * @param array $attributes
     *
     * @return \App\Entities\Profile
     */
    public function createOrFail(array $attributes);
}

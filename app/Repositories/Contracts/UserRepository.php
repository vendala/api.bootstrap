<?php

namespace App\Repositories\Contracts;

use App\Supports\Repositories\Contracts\Repository;

/**
 * Interface UserRepository.
 *
 * @package namespace App\Repositories\Contracts;
 */
interface UserRepository extends Repository
{
    /**
     * @param array $attributes
     *
     * @return \App\Entities\User
     */
    public function createOrFail(array $attributes);

    /**
     * Get the fillable attributes for the model.
     *
     * @return array
     */
    public function getFillable(): array;
}

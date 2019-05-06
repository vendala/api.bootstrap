<?php

namespace App\Supports\Repositories\Contracts;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface Repository.
 *
 * @package App\Supports\Repositories\Contracts
 */
interface Repository extends RepositoryInterface
{
    /**
     * @param array $attributes
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function createOrFail(array $attributes);
}

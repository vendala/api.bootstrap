<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Http\Requests\User\StorageRequest;

/**
 * Class StorageController.
 *
 * @package App\Http\Controllers\Api\V1\User
 */
final class StorageController extends UserController
{
    /**
     * @param \App\Http\Requests\User\StorageRequest $request
     */
    final public function __invoke(StorageRequest $request)
    {
        $this->user_repository->create($request->all());
    }
}

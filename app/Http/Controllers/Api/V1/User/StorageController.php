<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Http\Requests\User\StorageRequest;

/**
 * Class StorageController.
 *
 * @package App\Http\Controllers\Api\V1\User
 */
class StorageController extends UserController
{
    public function __invoke(StorageRequest $request)
    {
        $this->user->create($request->all());
    }
}

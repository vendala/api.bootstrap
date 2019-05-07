<?php

namespace App\Http\Controllers\Api\V1\User;

use Dingo\Api\Http\Response;
use App\Http\Requests\User\StorageRequest;
use App\Transformers\Api\V1\UserTransformer;

/**
 * Class StorageController.
 *
 * @package App\Http\Controllers\Api\V1\User
 */
class StorageController extends UserController
{
    /**
     * @param \App\Http\Requests\User\StorageRequest $request
     *
     * @return \Dingo\Api\Http\Response
     */
    public function __invoke(StorageRequest $request): Response
    {
        $attributes = $request->only($this->userRepository->getFillable());

        $user = $this->userRepository->createOrFail($attributes);

        $user->profile()->create();

        return $this->response->item($user, new UserTransformer())->setStatusCode(201);
    }
}

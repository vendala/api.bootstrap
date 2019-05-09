<?php

namespace App\Http\Controllers\User;

use Dingo\Api\Http\Response;
use App\Transformers\UserTransformer;
use App\Http\Requests\User\StorageRequest;

/**
 * Class StorageController.
 *
 * @package App\Http\Controllers\User
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

        return $this->response->item($user, new UserTransformer())->setStatusCode(201);
    }
}

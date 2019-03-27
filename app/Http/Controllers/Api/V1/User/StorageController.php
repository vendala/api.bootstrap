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
    /**
     * @param \App\Http\Requests\User\StorageRequest $request
     */
    public function __invoke(StorageRequest $request)
    {
        // Criar usuário
        // Criar perfil do usuário
        // get and save gravatar
        // Enviar email para continuar cadastro

        $this->user_repository->create($request->all());
    }
}

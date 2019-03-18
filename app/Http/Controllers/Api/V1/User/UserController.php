<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Http\Controllers\V1Controller;
use App\Repositories\Contracts\UserRepository;

/**
 * Class UserController.
 *
 * @package App\Http\Controllers\Api\V1\User
 */
abstract class UserController extends V1Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->initialize();
    }

    private function initialize()
    {
        $this->user = app(UserRepository::class);
    }
}

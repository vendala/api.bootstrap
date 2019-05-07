<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\BaseController;
use App\Repositories\Contracts\UserRepository;

use function app;

/**
 * Class UserController.
 *
 * @package App\Http\Controllers\User
 */
abstract class UserController extends BaseController
{
    /**
     * User Repository.
     *
     * @var \App\Repositories\Contracts\UserRepository
     */
    protected $userRepository;

    /**
     * UserController constructor.
     */
    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Initialize for construct.
     */
    private function initialize(): void
    {
        $this->userRepository = app(UserRepository::class);
    }
}

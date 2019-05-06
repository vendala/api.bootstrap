<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Http\Controllers\V1Controller;
use App\Repositories\Contracts\UserRepository;

use function app;

/**
 * Class UserController.
 *
 * @package App\Http\Controllers\Api\V1\User
 */
abstract class UserController extends V1Controller
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
        parent::__construct();

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

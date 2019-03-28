<?php

namespace App\Events\Api\V1\User;

use App\Events\Event;

/**
 * Class StorageEvent.
 *
 * @package App\Events\Api\V1\User
 */
class StorageEvent extends Event
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * StorageEvent constructor.
     *
     * @param string $name
     * @param string $email
     * @param string $password
     */
    public function __construct(string $name, string $email, string $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }
}

<?php

use App\Entities\User;
use Illuminate\Database\Seeder;
use Illuminate\Contracts\Hashing\Hasher as Hash;

/**
 * Class UsersTableSeeder
 */
class UsersTableSeeder extends Seeder
{
    /**
     * @const string
     */
    private const DEFAULT_PASSWORD = 'dededede';

    /**
     * @var \Illuminate\Contracts\Hashing\Hasher
     */
    private $hash;

    /**
     * @var \App\Entities\User
     */
    private $user;

    /**
     * UsersTableSeeder constructor.
     *
     * @param \App\Entities\User                   $user
     * @param \Illuminate\Contracts\Hashing\Hasher $hash
     */
    public function __construct(User $user, Hash $hash)
    {
        $this->hash = $hash;
        $this->user = $user;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $this->user->create([
            'name' => 'Jean C. Garcia',
            'email' => 'jeancesargarcia@gmail.com',
            'email_verified_at' => Carbon\Carbon::now(),
            'password' => $this->hash->make(self::DEFAULT_PASSWORD),
        ]);
    }
}

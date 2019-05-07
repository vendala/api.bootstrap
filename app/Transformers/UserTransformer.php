<?php

namespace App\Transformers;

use App\Entities\User;
use League\Fractal\TransformerAbstract;

/**
 * Class UserTransformer.
 *
 * @package App\Transformers
 */
class UserTransformer extends TransformerAbstract
{
    /**
     * Transform the $CLASS$ entity.
     *
     * @param \App\Entities\User $user
     *
     * @return array
     */
    public function transform(User $user): array
    {
        return [
            'id'         => (int) $user->id,
            'name'       => $user->name,
            'email'      => $user->email,
            'created_at' => $user->created_at->toW3cString(),
            'updated_at' => $user->updated_at->toW3cString()
        ];
    }
}

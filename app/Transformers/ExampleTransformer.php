<?php

namespace App\Transformers;

use App\Entities\User;
use League\Fractal\TransformerAbstract;

/**
 * Class ExampleTransformer.
 *
 * @package \App\Transformers
 */
class ExampleTransformer extends TransformerAbstract
{
    /**
     * Transform the $CLASS$ entity.
     *
     * @param \App\Entities\User $user
     *
     * @return array
     */
    public function transform(User $user)
    {
        return [
            'id'         => (int) $user->id,

            /* place your other model properties here */

            'created_at' => $user->created_at,
            'updated_at' => $user->updated_at
        ];
    }
}

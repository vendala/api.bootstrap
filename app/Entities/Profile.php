<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Entities\Profile
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $avatar
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Entities\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Profile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Profile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Profile query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Profile whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Profile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Profile whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Profile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Profile whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Profile whereUserId($value)
 * @mixin \Eloquent
 */
class Profile extends Model implements Transformable
{
    use TransformableTrait;

    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     */
    protected $fillable = ['user_id', 'avatar'];

    /**
     * Define an inverse one-to-one or many relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Repositories;

use App\Entities\Profile;
use App\Validators\ProfileValidator;
use App\Supports\Repositories\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Contracts\ProfileRepository;

/**
 * Class ProfileRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ProfileRepositoryEloquent extends BaseRepository implements ProfileRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model(): string
    {
        return Profile::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    /**
     * @return string
     */
    public function validator(): string
    {
        return ProfileValidator::class;
    }

    /**
     * @param int $useId
     *
     * @return \App\Entities\Profile|\Illuminate\Database\Eloquent\Model
     */
    public function createProfileByUserId(int $useId): Profile
    {
        return $this->createOrFail(['user_id' => $useId]);
    }
}

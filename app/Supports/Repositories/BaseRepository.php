<?php

namespace App\Supports\Repositories;

use Prettus\Validator\Exceptions\ValidatorException;
use App\Exceptions\Resources\StoreResourceFailedException;

use Prettus\Repository\Eloquent\BaseRepository as Repository;
use App\Supports\Repositories\Contracts\Repository as FactoryRepository;

/**
 * Class BaseRepository.
 *
 * @package App\Supports\Repositories
 */
class BaseRepository extends Repository implements FactoryRepository
{
    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model;

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model(): string
    {
        return $this->model;
    }

    /**
     * @param array $attributes
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function createOrFail(array $attributes): \Illuminate\Database\Eloquent\Model
    {
        try {
            return $this->model->create($attributes);
        } catch (ValidatorException $exception) {
            throw new StoreResourceFailedException($exception->getMessage(), $exception->getMessageBag()->toArray());
        }
    }
}

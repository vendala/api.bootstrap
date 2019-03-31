<?php

namespace App\Presenters\Api\V1;

use App\Transformers\Api\V1\UserTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class UserPresenter.
 *
 * @package App\Presenters\Api\V1
 */
class UserPresenter extends FractalPresenter
{

    /**
     * Transformer
     *
     * @return \App\Transformers\Api\V1\UserTransformer
     *
     */
    public function getTransformer()
    {
        return new UserTransformer();
    }
}

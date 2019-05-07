<?php

namespace App\Presenters;

use App\Transformers\UserTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class UserPresenter.
 *
 * @package App\Presenters
 */
class UserPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \App\Transformers\UserTransformer
     *
     */
    public function getTransformer()
    {
        return new UserTransformer();
    }
}

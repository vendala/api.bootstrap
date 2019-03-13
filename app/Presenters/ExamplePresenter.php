<?php

namespace App\Presenters;

use App\Transformers\ExampleTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class ExamplePresenter.
 *
 * @package \App\Presenters
 */
class ExamplePresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \App\Transformers\ExampleTransformer
     */
    public function getTransformer(): ExampleTransformer
    {
        return new ExampleTransformer();
    }
}

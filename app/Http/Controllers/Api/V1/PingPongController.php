<?php

namespace App\Http\Controllers\Api\V1;

use Dingo\Api\Http\Response;
use App\Http\Controllers\V1Controller;

/**
 * Class PingPongController.
 *
 * @package App\Http\Controllers\Api\V1
 */
class PingPongController extends V1Controller
{
    /**
     * @return \Dingo\Api\Http\Response
     */
    public function __invoke(): Response
    {
        return $this->response->noContent();
    }
}

<?php

namespace App\Http\Controllers;

use Dingo\Api\Http\Response;

/**
 * Class PingPongController.
 *
 * @package App\Http\Controllers
 */
class PingPongController extends BaseController
{
    /**
     * @return \Dingo\Api\Http\Response
     */
    public function __invoke(): Response
    {
        return $this->response->noContent();
    }
}

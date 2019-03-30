<?php

namespace App\Http\Controllers;

/**
 * Class V1Controller.
 *
 * @package App\Http\Controllers
 */
abstract class V1Controller extends ApiController
{
    /**
     * V1Controller constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }
}

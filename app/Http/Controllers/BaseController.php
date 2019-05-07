<?php

namespace App\Http\Controllers;

use Dingo\Api\Routing\Helpers;
use Laravel\Lumen\Routing\Controller;

/**
 * Class Controller
 *
 * @package App\Http\Controllers
 */
abstract class BaseController extends Controller
{
    use Helpers;
}

<?php

namespace App\Exceptions\Resources;

use App\Exceptions\Http\UnprocessableEntityHttpException;

/**
 * Class ResourceException.
 *
 * @package App\Exceptions\Resources
 */
class ResourceException extends UnprocessableEntityHttpException
{
    /**
     * @param string     $message The internal exception message
     * @param array|null $errors
     * @param int        $code The internal exception code
     * @param \Exception $previous The previous exception
     */
    public function __construct(string $message = null, array $errors = null, $code = 0, \Exception $previous = null)
    {
        parent::__construct($message, $errors, $code, $previous);
    }
}

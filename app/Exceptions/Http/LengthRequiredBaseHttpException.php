<?php

namespace App\Exceptions\Http;

/**
 * Class LengthRequiredBaseHttpException.
 * 
 * @package App\Exceptions\Http
 */
class LengthRequiredBaseHttpException extends BaseHttpException
{
    /**
     * @const int
     */
    private const STATUS_CODE = 411;

    /**
     * @param string     $message The internal exception message
     * @param array|null $errors
     * @param int        $code The internal exception code
     * @param \Exception $previous The previous exception
     */
    public function __construct($message = null, array $errors = null, $code = 0, \Exception $previous = null)
    {
        parent::__construct(self::STATUS_CODE, $message, $errors, $previous, array(), $code);
    }
}

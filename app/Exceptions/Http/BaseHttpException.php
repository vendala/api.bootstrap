<?php

namespace App\Exceptions\Http;

use Exception;
use Illuminate\Support\MessageBag;
use Dingo\Api\Contract\Debug\MessageBagErrors;
use Symfony\Component\HttpKernel\Exception\HttpException;

/**
 * Class BaseHttpException.
 *
 * @package App\Exceptions\Http
 */
class BaseHttpException extends HttpException implements MessageBagErrors
{
    /**
     * MessageBag errors.
     *
     * @var \Illuminate\Support\MessageBag
     */
    protected $errors;

    /**
     * Create a new resource exception instance.
     *
     * @param int                                   $status_code
     * @param string                                $message   The internal exception message
     * @param \Illuminate\Support\MessageBag|array  $errors
     * @param \Exception                            $previous  The previous exception
     * @param array                                 $headers
     * @param int                                   $code      The internal exception code
     */
    public function __construct(int $status_code, string $message = null, array $errors = null, Exception $previous = null, $headers = [], $code = 0)
    {
        $this->errors = is_null($errors) ? new MessageBag : new MessageBag($errors);

        parent::__construct($status_code, $message, $previous, $headers, $code);
    }

    /**
     * Get the errors message bag.
     *
     * @return \Illuminate\Support\MessageBag
     */
    public function getErrors(): MessageBag
    {
        return $this->errors;
    }

    /**
     * Determine if message bag has any errors.
     *
     * @return bool
     */
    public function hasErrors(): bool
    {
        return ! $this->errors->isEmpty();
    }
}

<?php

namespace Nishchay\Exception;

/**
 * Invalid service request exception.
 * Thrown when invalid parameter are found.
 *
 * @license     https://nishchay.io/license    New BSD License
 * @copyright   (c) 2020, Nishchay PHP Framework
 * @version     1.0
 * @author      Bhavik Patel
 */
class BadRequestException extends BaseException
{

    /**
     * HTTP header status code.
     */
    const STATUS_CODE = 400;

    /**
     * Calls parent constructor.
     * 
     * @param string $message
     * @param srting $classOrTraceBack
     * @param string $method
     * @param int $code
     * @param Throwable $previous
     */
    public function __construct($message = '', $classOrTraceBack = null, $method = null,
            $code = E_USER_ERROR, $previous = null)
    {
        parent::__construct($message, $classOrTraceBack, $method, $code, $previous);
    }

}

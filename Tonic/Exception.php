<?php

namespace Tonic;

/**
 * Base exception class for Tonic exceptions
 */
class Exception extends \Exception
{
    /**
     * @var string
     */
    protected $message  = 'An unknown Tonic exception occurred';

    /**
     * @var int
     */
    protected $code = 500;

    /**
     * @return array
     */
    public function getErrorArray()
    {
        return array(
            'error' => $this->code,
            'message' => $this->message
        );
    }
}

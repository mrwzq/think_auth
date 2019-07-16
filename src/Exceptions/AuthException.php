<?php

/*
 * (c) Zachary Wang <291768903@qq.com>
 */

namespace Zachary\Exceptions;

class AuthException extends \Exception
{
    protected $code = 90001;

    public function __construct($message = '')
    {
        parent::__construct($message, $this->code);
    }
}

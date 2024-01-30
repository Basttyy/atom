<?php

namespace Atom\Http\Middlewares\Exception;

class MiddlewareException extends \Exception
{
    public const ERR_MSG_NO_MIDDLEWARES = "No Middlewares";
    public const ERR_MSG_INVALID_MIDDLEWARES = "Invalid Middlewares";
    public const ERR_MSG_MIDDLEWARE_NOT_EXISTS = "Middleware Not Exists";
    public const ERR_MSG_MIDDLEWARE_FAIL = "Middleware Fails";
}
<?php

namespace Atom\Http\Exception;

class ResponseException extends \Exception
{
    public const ERR_MSG_INVALID_ARGUMENTS = "Invalid Arguments";
    public const ERR_MSG_INVALID_HTTP_CODE = "Invalid Http Code";
}

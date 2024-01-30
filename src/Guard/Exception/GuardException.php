<?php

namespace Atom\Guard\Exception;

class GuardException extends \Exception
{
    public const ERR_MSG_NO_KEY = "no app key";
    public const ERR_MSG_INVALID_GUARD_KEYS = "invalid guard keys";
    public const ERR_MSG_UNAUTHORIZED = "unauthorized";
}

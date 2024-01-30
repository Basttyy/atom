<?php

namespace Atom\Controllers\Exception;

class ControllerException extends \Exception
{
    public const ERR_MSG_INVALID_CONTROLLER = "Controller Not Found";
    public const ERR_MSG_ACTION_FAIL = "Action Failed";
    // public const ERR_MSG_DOCTRINE_NOT_USE = "Doctrine Not Used";
}

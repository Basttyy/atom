<?php

namespace Atom\File\Exception;

class CsvException extends \Exception
{
    public const ERR_MSG_INVALID_FILE = "invalid file";
    public const ERR_MSG_INVALID_DATA = "invalid data";
    public const ERR_MSG_SAVE_FAIL = "save file fail";
}

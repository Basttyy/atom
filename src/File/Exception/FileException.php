<?php

namespace Atom\File\Exception;

class FileException extends \Exception
{
    public const ERR_MSG_FILE_TOO_LARGE = "file is too large";
    public const ERR_MSG_SAVE_FILE_FAIL = "unable to save file";
    public const ERR_MSG_UNKNOW_FILE = "unknown file";
    public const ERR_MSG_FILENAME_ALREADY_USED = "filename already exists";
}

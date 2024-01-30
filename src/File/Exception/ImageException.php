<?php

namespace Atom\File\Exception;

class ImageException extends \Exception
{
    public const ERR_MSG_BAD_REQUEST = "bad request";
    public const ERR_MSG_UPLOAD_FAIL = "failed to upload image";
    public const ERR_MSG_UNKNOW_FILE = "unknown file";
    public const ERR_MSG_FILE_TOO_LARGE = "file is too large";
    public const ERR_MSG_FILE_NOT_EXIST = "file does not exist";
}

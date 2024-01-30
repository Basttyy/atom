<?php

namespace Atom\Libs\Image\Exception;

class ImageException extends \Exception
{
    public const ERR_MSG_BAD_REQUEST = "Bad Request";
    public const ERR_MSG_UPLOAD_FAIL = "Image Upload Fail";
    public const ERR_MSG_UNKNOW_FILE = "Unknow File";
    public const ERR_MSG_FILE_TOO_LARGE = "File Too Large";
    public const ERR_MSG_FILE_NOT_EXIST = "File Not Exist";
}

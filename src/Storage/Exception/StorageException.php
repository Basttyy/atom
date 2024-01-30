<?php

namespace Atom\Storage\Exception;

class StorageException extends \Exception
{
    public const ERR_MSG_NOT_FOUND = "Storage Not Found";
    public const ERR_MSG_UNKNOW_FILE = "Unknow File";
    public const ERR_MSG_UPLOAD_FAIL = "Upload Fail";
}

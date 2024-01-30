<?php

namespace Atom\Storage;

use Atom\Storage\StorageInterface;
use Atom\Storage\Exception\StorageException;

class LocalService implements StorageInterface
{
    public $storage;

    /**
     * Local Storage Service
     * @param string $path
     */
    public function __construct(string $path)
    {
        $this->storage = $path;
    }

    public function upload(string $directory, string $file)
    {
        try {
            $fileData = file_get_contents($file);
            file_put_contents($directory, $fileData);
        } catch (\Exception $e) {
            throw new StorageException(StorageException::ERR_MSG_UPLOAD_FAIL);
        }
    }

    public function getFullUrl(string $directory = null)
    {
        $child = array_filter(explode('/', $directory));
        $parent = array_shift($child);
        if ($parent == 'public') {
            return public_path('/' . implode('/', $child));
        }
        return $directory ? storage_path($directory) : storage_path();
    }

    public function remove(string $fileName)
    {
        unlink($fileName);
    }

    public function dirOrFileExists(string $directory)
    {
        return file_exists($directory);
    }
}

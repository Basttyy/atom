<?php

namespace Atom\Storage;

interface StorageInterface
{
    /**
     * Upload file
     * @param  string $directory /storage/images/test.jpg
     * @param  string  $file
     * @return void
     */
    public function upload(string $directory, string $file);

    /**
     * Remove item from the storage
     * @return string $filname the name or path to the file
     */
    public function remove(string $fileName);

    /**
     * Get Full URL
     * @param  string|null $directory
     * @return string
     */
    public function getFullUrl(string $directory);

    /**
     * Check Directory or File is existed
     * @param  string $directory
     * @return bool
     */
    public function dirOrFileExists(string $fileOrPath);
}

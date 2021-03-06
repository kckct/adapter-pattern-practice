<?php

namespace App\SDK;

/**
 * Class AWSSDK
 * @package App\SDK
 */
class AWSSDK
{
    /**
     * @param string $container
     * @param string $blob
     * @return string
     */
    public function getObject(string $container, string $blob): string
    {
        return 'Get AWS File';
    }

    /**
     * @param string $container
     * @param string $blob
     * @param string $file
     * @return string
     */
    public function putObject(string $container, string $blob, string $file): string
    {
        return 'AWS S3 uploading file...';
    }

    /**
     * @param string $container
     * @param string $blob
     * @return string
     */
    public function deleteObject(string $container, string $blob): string
    {
        return 'AWS S3 deleting file...';
    }
}
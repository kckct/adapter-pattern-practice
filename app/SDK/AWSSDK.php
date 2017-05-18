<?php
namespace App\SDK;
use App\Services\CloudSDK;

/**
 * Class AWSSDK
 * @package App\SDK
 */
class AWSSDK implements CloudSDK
{
    /**
     * @param string $container
     * @param string $blob
     * @return string
     */
    public function getObject(string $container, string $blob)
    {
        return 'Get AWS File';
    }

    /**
     * @param string $container
     * @param string $blob
     * @param string $file
     * @return string
     */
    public function putObject(string $container, string $blob, string $file)
    {
        return 'AWS S3 uploading file...';
    }

    /**
     * @param string $container
     * @param string $blob
     * @return string
     */
    public function deleteObject(string $container, string $blob)
    {
        return 'AWS S3 deleting file...';
    }
}
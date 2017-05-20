<?php

namespace App\SDK;

/**
 * Class AzureSDK
 * @package App\SDK
 */
class AzureSDK
{
    /**
     * @param string $container
     * @param string $blob
     * @return string
     */
    public function getBlobUrl(string $container, string $blob): string
    {
        return 'Get Azure File';
    }

    /**
     * @param string $container
     * @param string $blob
     * @param string $file
     * @return string
     */
    public function createBlob(string $container, string $blob, string $file): string
    {
        return 'Azure uploading file...';
    }

    /**
     * @param string $container
     * @param string $blob
     * @return string
     */
    public function deleteBlob(string $container, string $blob): string
    {
        return 'Azure deleting file...';
    }
}
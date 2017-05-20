<?php

namespace App\Services;

use App\SDK\AzureSDK;

/**
 * Class AzureAdapter
 * @package App\Services
 */
class AzureAdapter implements CloudSDK
{
    /*** @var AzureSDK */
    private $azureSDK;

    /**
     * AzureAdapter constructor.
     */
    public function __construct()
    {
        $this->azureSDK = new AzureSDK();
    }

    /**
     * @param string $container
     * @param string $blob
     * @return string
     */
    public function getObject(string $container, string $blob)
    {
        return $this->azureSDK->getBlobUrl($container, $blob);
    }

    /**
     * @param string $container
     * @param string $blob
     * @param string $file
     * @return string
     */
    public function putObject(string $container, string $blob, string $file)
    {
        return $this->azureSDK->createBlob($container, $blob, $file);
    }

    /**
     * @param string $container
     * @param string $blob
     * @return string
     */
    public function deleteObject(string $container, string $blob)
    {
        return $this->azureSDK->deleteBlob($container, $blob);
    }
}
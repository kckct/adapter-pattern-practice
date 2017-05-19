<?php
namespace App\Services;

use App\SDK\AWSSDK;

/**
 * Class AWSAdapter
 * @package App\Services
 */
class AWSAdapter implements CloudSDK
{
    /*** @var AWSSDK */
    private $awsSDK;

    /**
     * AWSAdapter constructor.
     */
    public function __construct()
    {
        $this->awsSDK = new AWSSDK();
    }

    /**
     * @param string $container
     * @param string $blob
     * @return string
     */
    public function getObject(string $container, string $blob): string
    {
        return $this->awsSDK->getObject($container, $blob);
    }

    /**
     * @param string $container
     * @param string $blob
     * @param string $file
     * @return string
     */
    public function putObject(string $container, string $blob, string $file): string
    {
        return $this->awsSDK->putObject($container, $blob, $file);
    }

    /**
     * @param string $container
     * @param string $blob
     * @return string
     */
    public function deleteObject(string $container, string $blob): string
    {
        return $this->awsSDK->deleteObject($container, $blob);
    }
}
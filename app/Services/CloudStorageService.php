<?php
namespace App\Services;

use App\SDK\AWSSDK;

/**
 * Class CloudStorageService
 * @package App\Services
 */
class CloudStorageService
{
    /**
     * @var AWSSDK
     */
    private $awsSDK;

    /**
     * CloudStorageService constructor.
     */
    public function __construct()
    {
        $this->awsSDK = new AWSSDK();
    }

    /**
     * @param string $folder
     * @param string $remoteFile
     * @return string
     */
    public function getFileUrl(string $folder, string $remoteFile)
    {
        return $this->awsSDK->getObject($folder, $remoteFile);
    }

    /**
     * @param string $folder
     * @param string $remoteFile
     * @param string $localFile
     * @return string
     */
    public function uploadFile(string $folder, string $remoteFile, string $localFile)
    {
        return $this->awsSDK->putObject($folder, $remoteFile, $localFile);
    }

    /**
     * @param string $folder
     * @param string $remoteFile
     * @return string
     */
    public function deleteFile(string $folder, string $remoteFile)
    {
        return $this->awsSDK->deleteObject($folder, $remoteFile);
    }
}
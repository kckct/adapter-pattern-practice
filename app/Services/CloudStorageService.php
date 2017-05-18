<?php
namespace App\Services;

/**
 * Class CloudStorageService
 * @package App\Services
 */
class CloudStorageService
{
    /**
     * @var CloudSDK
     */
    private $cloudSDK;

    /**
     * CloudStorageService constructor.
     */
    public function __construct()
    {
        $this->cloudSDK = CloudSDKFactory::create();
    }

    /**
     * @param string $folder
     * @param string $remoteFile
     * @return string
     */
    public function getFileUrl(string $folder, string $remoteFile)
    {
        return $this->cloudSDK->getObject($folder, $remoteFile);
    }

    /**
     * @param string $folder
     * @param string $remoteFile
     * @param string $localFile
     * @return string
     */
    public function uploadFile(string $folder, string $remoteFile, string $localFile)
    {
        return $this->cloudSDK->putObject($folder, $remoteFile, $localFile);
    }

    /**
     * @param string $folder
     * @param string $remoteFile
     * @return string
     */
    public function deleteFile(string $folder, string $remoteFile)
    {
        return $this->cloudSDK->deleteObject($folder, $remoteFile);
    }
}
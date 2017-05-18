<?php

namespace App\Services;

/**
 * Class CloudSDK
 * @package App\Services
 */
interface CloudSDK
{
    /**
     * @param string $container
     * @param string $blob
     * @return string
     */
    public function getObject(string $container, string $blob);

    /**
     * @param string $container
     * @param string $blob
     * @param string $file
     * @return string
     */
    public function putObject(string $container, string $blob, string $file);

    /**
     * @param string $container
     * @param string $blob
     * @return string
     */
    public function deleteObject(string $container, string $blob);
}
<?php
namespace App\Services;

/**
 * Class CloudSDKFactory
 * @package App\Services
 */
class CloudSDKFactory
{
    /**
     * @return CloudSDK
     */
    public static function create(): CloudSDK
    {
        $lut = config('app.CloudLUT');
        $cloudStorage = config('app.CloudStorage');

        $className = collect($lut)->get($cloudStorage, AWSAdapter::class);
        return new $className();
    }
}
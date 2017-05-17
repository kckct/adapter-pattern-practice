<?php
namespace App\Http\Controllers;

use App\Services\CloudStorageService;

/**
 * Class CloudStorageController
 * @package App\Http\Controllers
 */
class CloudStorageController extends Controller
{
    /**
     * @var CloudStorageService
     */
    private $cloudStorageService;

    /**
     * CloudStorageController constructor.
     * @param CloudStorageService $cloudStorageService
     */
    public function __construct(CloudStorageService $cloudStorageService)
    {
        $this->cloudStorageService = $cloudStorageService;
    }

    /**
     * 下載
     */
    public function index()
    {
        $result = $this->cloudStorageService->getFileUrl('MyFolder', 'MyRemoteFile');
        return response()->json([
            'result' => $result
        ]);
    }

    /**
     * 上傳
     */
    public function store()
    {
        $result = $this->cloudStorageService->uploadFile('MyFolder', 'MyRemoteFile', 'MyLocalFile');
        return response()->json([
            'result' => $result
        ]);
    }

    /**
     * 刪除
     */
    public function destroy()
    {
        $result = $this->cloudStorageService->deleteFile('MyFolder', 'MyRemoteFile');
        return response()->json([
            'result' => $result
        ]);
    }
}

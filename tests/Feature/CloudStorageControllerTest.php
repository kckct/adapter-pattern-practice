<?php
namespace Tests\Feature;

use Tests\TestCase;

/**
 * Class CloudStorageControllerTest
 * @package Tests\Unit
 */
class CloudStorageControllerTest extends TestCase
{
    public function test_下載測試()
    {
        $response = $this->json('GET', 'api/index', []);
        $response->assertStatus(200);
        $response->assertJson([
            'result' => 'Get AWS File'
        ]);
    }

    public function test_上傳測試()
    {
        $response = $this->json('GET', 'api/store', []);
        $response->assertStatus(200);
        $response->assertJson([
            'result' => 'AWS S3 uploading file...'
        ]);
    }

    public function test_刪除測試()
    {
        $response = $this->json('GET', 'api/destroy', []);
        $response->assertStatus(200);
        $response->assertJson([
            'result' => 'AWS S3 deleting file...'
        ]);
    }
}
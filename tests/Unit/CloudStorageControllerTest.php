<?php
namespace Tests\Unit;

use App\Http\Controllers\CloudStorageController;
use Tests\TestCase;
use Mockery as m;

/**
 * Class CloudStorageControllerTest
 * @package Tests\Unit
 */
class CloudStorageControllerTest extends TestCase
{
    private $service;
    private $controller;

    public function setUp()
    {
        parent::setUp();
        $this->service = m::mock('App\Services\CloudStorageService');
        $this->controller = new CloudStorageController($this->service);
    }

    public function tearDown()
    {
        parent::tearDown();
    }

    public function test_下載測試()
    {
        $this->service->shouldReceive('getFileUrl')->once()->andReturn('test');

        $response = $this->controller->index();

        $excepted = [
            'result' => 'test'
        ];

        $this->assertEquals($excepted, json_decode($response->getContent(), true));
    }

    public function test_上傳測試()
    {
        $this->service->shouldReceive('uploadFile')->once()->andReturn('test');

        $response = $this->controller->store();

        $excepted = [
            'result' => 'test'
        ];

        $this->assertEquals($excepted, json_decode($response->getContent(), true));
    }

    public function test_刪除測試()
    {
        $this->service->shouldReceive('deleteFile')->once()->andReturn('test');

        $response = $this->controller->destroy();

        $excepted = [
            'result' => 'test'
        ];

        $this->assertEquals($excepted, json_decode($response->getContent(), true));
    }
}
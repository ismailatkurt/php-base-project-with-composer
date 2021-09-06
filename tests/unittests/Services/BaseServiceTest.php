<?php

namespace App\Unittests\Services;

use App\Models\Base;
use App\Services\BaseService;
use PHPUnit\Framework\TestCase;

class BaseServiceTest extends TestCase
{
    /** @test */
    public function create_instance_of_base_model()
    {
        $classUnderTest = new BaseService();

        $baseInstance = $classUnderTest->createBaseInstance('foo');

        $this->assertInstanceOf(Base::class, $baseInstance);
        $this->assertEquals('foo', $baseInstance->getFoo());
    }
}

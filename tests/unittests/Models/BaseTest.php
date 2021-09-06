<?php

namespace App\Unittests\Models;

use App\Models\Base;
use PHPUnit\Framework\TestCase;

class BaseTest extends TestCase
{
    /** @test */
    public function base_can_be_json_encoded_test()
    {
        $classUnderTest = new Base('bar');

        $result = json_encode($classUnderTest);

        $this->assertEquals("{\"foo\":\"bar\"}", $result);
    }

    /** @test */
    public function foo_field_can_be_updated()
    {
        $classUnderTest = new Base('bar');

        $classUnderTest->setFoo('new bar');

        $this->assertEquals('new bar', $classUnderTest->getFoo());
    }
}

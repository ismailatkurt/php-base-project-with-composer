<?php

namespace App\Services;

use App\Models\Base;

class BaseService
{
    /**
     * @param string $string
     *
     * @return Base
     */
    public function createBaseInstance(string $string): Base
    {
        return new Base($string);
    }
}
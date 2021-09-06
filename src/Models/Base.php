<?php

namespace App\Models;

class Base implements \JsonSerializable
{
    /**
     * @var string
     */
    private string $foo;

    /**
     * @param string $foo
     */
    public function __construct(string $foo)
    {
        $this->foo = $foo;
    }

    /**
     * @return string
     */
    public function getFoo(): string
    {
        return $this->foo;
    }

    /**
     * @param string $foo
     *
     * @return Base
     */
    public function setFoo(string $foo): Base
    {
        $this->foo = $foo;

        return $this;
    }

    /**
     * @return string[]
     */
    public function jsonSerialize(): array
    {
        return [
            'foo' => $this->foo
        ];
    }
}

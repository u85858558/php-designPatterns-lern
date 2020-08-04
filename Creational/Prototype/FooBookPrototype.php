<?php declare(strict_types=1);

namespace App\Creational\Pool;

class FooBookPrototype extends BookPrototype
{
    protected string $category = 'Foo';

    public function __clone()
    {
    }
}
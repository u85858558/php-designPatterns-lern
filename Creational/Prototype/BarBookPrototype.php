<?php declare(strict_types=1);

namespace App\Creational\Pool;

class BarBookPrototype extends BookPrototype
{
    protected string $category = 'Bar';

    public function __clone()
    {
    }
}
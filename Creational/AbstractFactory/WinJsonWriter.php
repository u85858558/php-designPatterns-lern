<?php

namespace app\Creational\AbstractFactory;

class WinJsonWriter implements JsonWriter
{
    public function write(array $data, bool $formatted): string
    {
        return json_decode($data, JSON_PRETTY_PRINT);
    }
}

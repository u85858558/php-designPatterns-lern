<?php

namespace app\Creational\AbstractFactory;

interface WriterFactory
{
    public function createCsvWriter(): CsvWriter;
    public function createJsonWriter(): JsonWriter;
}

$triger = new WriterFactory();

var_dump($triger);
<?php

namespace app\Creational\AbstractFactory;

interface CsvWriter 
{
    public function write(array $line): string;
}

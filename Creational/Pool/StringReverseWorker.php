<?php declare(strict_types=1);

namespace App\Creational\Pool;

use DateTime;

class StringReverseWorker
{
    private DateTime $createAt;

    public function __construct()
    {
        $this->createAt = new DateTime();
    }

    public function run(string $text)
    {
        return strrev($text);
    }
}
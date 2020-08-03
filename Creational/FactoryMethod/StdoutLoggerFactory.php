<?php declare(strict_types=1);

namespace App\Creational\FactoryMethod;

class StdoutLoggerFacrory implements LoggerFactory
{
    public function createLogger(): Logger
    {
        return new StdoutLogger();
    }
}
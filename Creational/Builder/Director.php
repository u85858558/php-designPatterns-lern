<?php declare(strict_types=1);

namespace app\Creational\Builder;

use app\Creational\Builder\Parts\Vehicle;

class Director
{
    public function build(Builder $builder): Vehicle
    {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();

        return $builder->getVhicle();
    }
}
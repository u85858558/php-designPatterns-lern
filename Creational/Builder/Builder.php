<?php declare(strict_types=1);

namespace app\Creational\Builder;

use app\Creational\Builder\Parts\Vehicle;

interface Builder 
{
    public function createVehicle();

    public function addWheel();

    public function addEngine();

    public function addDoors();

    public function getVhicle(): Vehicle;
}

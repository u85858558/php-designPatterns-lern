<?php declare(strict_types=1);

namespace app\Creational\Builder;

use app\Creational\Builder\Parts\Car;
use app\Creational\Builder\Parts\Door;
use app\Creational\Builder\Parts\Engine;
use app\Creational\Builder\Parts\Wheel;
use app\Creational\Builder\Parts\Vehicle;

class CarBuilder implements Builder
{
    private Car $car;

    public function addDoors()
    {
        $this->car->setPart('rightDoor', new Door());
        $this->car->setPart('leftDoor', new Door());
        $this->car->setPart('trunkLid', new Door());
    }

    public function addEngine()
    {
        $this->car->setPart('engine', new Engine());
    }

    public function addWheel()
    {
        $this->car->setPart('wheelLF', new Wheel());
        $this->car->setPart('wheelLR', new Wheel());
        $this->car->setPart('wheelRF', new Wheel());
        $this->car->setPart('wheelRR', new Wheel());
    }

    public function createVehicle()
    {
        $this->car = new Car();
    }

    public function getVhicle(): Vehicle
    {
        return $this->car;
    }
}

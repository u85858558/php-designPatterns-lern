<?php declare(strict_types=1);

namespace app\Creational\Builder;

use app\Creational\Builder\Parts\Vehicle;
use app\Creational\Builder\Parts\Truck;
use app\Creational\Builder\Parts\Door;
use app\Creational\Builder\Parts\Engine;
use app\Creational\Builder\Parts\Wheel;

class TruckBuilder implements Builder
{
    private Truck $truck;

    public function addDoors()
    {
        $this->truck->setPart('righDoor', new Door());
        $this->truck->setPart('leftDoor', new Door());
    }

    public function addEngine()
    {
        $this->truck->setPart('truckEngine', new Engine());
    }

    public function addWheel()
    {
        $this->truck->setPart('wheel1', new Wheel());
        $this->truck->setPart('wheel2', new Wheel());
        $this->truck->setPart('wheel3', new Wheel());
        $this->truck->setPart('wheel4', new Wheel());
        $this->truck->setPart('wheel5', new Wheel());
        $this->truck->setPart('wheel6', new Wheel());
    }

    public function createVehicle()
    {
        $this->truck = new Truck();
    }

    public function getVhicle(): Vehicle
    {
        return $this->truck;
    }
}
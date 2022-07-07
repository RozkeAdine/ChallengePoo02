<?php

require_once 'class/Vehicle.php';

class Truck extends Vehicle
{
    private string $energy;
    protected int $loadCapacity = 10;

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public function starter(): string
   {
        $this->loadCapacity = 0;
        return "Go !";
    }

    public function fill(): string
    {
        $sentence = "";
        while ($this->loadCapacity < 10) {
            $this->loadCapacity++;
            $sentence .= "in filling !!!";
        }

        $sentence .= "full !";
        return $sentence;
    }
    public function getLoadCapacity(): int
    {
        return $this->loadCapacity;
    }
    public function setLoadCapacity( int $loadCapacity)
    {
        return $this->loadCapacity = $loadCapacity;
    }
};
?>
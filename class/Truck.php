<?php

require_once 'class/Vehicle.php';

class Truck extends Vehicle
{
    private string $energy;
    private int $loadCapacity;
    private int $load;

    public function fill(): string
    {
        $sentence = "";
        while ($this->energyLevel > 0) {
            $this->energyLevel--;
            $sentence .= "in filling !!!";
        }
        $sentence .= "full !";
        return $sentence;

}
?>
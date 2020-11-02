<?php

class Odometer
{
    private int $currentMileage;
    private int $maxMileage;

    public function __construct(int $currentMileage, int $maxMileage = 999999)
    {
        $this->currentMileage = $currentMileage;
        $this->maxMileage = $maxMileage;
    }

    public function getCurrentMileage(): int
    {
        return $this->currentMileage;
    }

    public function addMileage(FuelGauge $fuelGauge): void
    {
        if ($this->currentMileage < $this->maxMileage) {
            $this->currentMileage++;
        } else {
            $this->currentMileage = 0;
        }
        if ($this->currentMileage % 10 == 0) {
            $fuelGauge->burnFuel();
        }
    }
}
<?php

class FuelGauge
{
    private int $currentFuel;
    private int $maxFuel;

    public function __construct(int $currentFuel, int $maxFuel = 70)
    {
        $this->currentFuel = $currentFuel;
        $this->maxFuel = $maxFuel;
    }

    public function getCurrentFuel(): int
    {
        return $this->currentFuel;
    }

    public function addFuel(): void
    {
        if ($this->currentFuel < $this->maxFuel) {
            $this->currentFuel++;
        }
    }

    public function burnFuel(): void
    {
        if ($this->currentFuel > 0) {
            $this->currentFuel--;
        }
    }
}
<?php

class Survey
{
    private int $surveyed;
    private float $purchasedEnergyDrinks;
    private float $preferCitrusDrinks;

    public function __construct(
        int $surveyed,
        float $purchasedEnergyDrinks,
        float $preferCitrusDrinks)
    {
        $this->surveyed = $surveyed;
        $this->purchasedEnergyDrinks = $purchasedEnergyDrinks;
        $this->preferCitrusDrinks = $preferCitrusDrinks;
    }

    public function getSurveyed(): int
    {
        return $this->surveyed;
    }

    public function calculateEnergyDrinkers()
    {
        return round($this->surveyed * $this->purchasedEnergyDrinks);
    }

    public function calculatePreferCitrus(
        int $energyDrinkers
    )
    {
        return round($energyDrinkers * $this->preferCitrusDrinks);
    }
}

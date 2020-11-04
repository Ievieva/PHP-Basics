<?php

require_once 'FuelGauge.php';
require_once 'Odometer.php';

$fuelGauge = new FuelGauge(0);
$odometer = new Odometer(0);


while ($fuelGauge->getCurrentFuel() < 70) {
    $fuelGauge->addFuel();
    echo 'Filling up the tank: ' . $fuelGauge->getCurrentFuel() . PHP_EOL;
    sleep(1);
}

while ($fuelGauge->getCurrentFuel() > 0) {
    $odometer->addMileage($fuelGauge);
    echo 'Current mileage : ' . $odometer->getCurrentMileage() . PHP_EOL;
    echo 'Fuel: ' . $fuelGauge->getCurrentFuel() . PHP_EOL;
    echo str_repeat('=', 10) . PHP_EOL;
    sleep(1);
}


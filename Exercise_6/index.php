<?php

require_once 'Survey.php';

$survey = new Survey(12467, 0.14, 0.64);

$surveyed = $survey->getSurveyed();

$energyDrinkers = $survey->calculateEnergyDrinkers();

$citrusLovers = $survey->calculatePreferCitrus($energyDrinkers);

echo "Total number of people surveyed - " . $surveyed . PHP_EOL;
echo "Approximately " . $energyDrinkers . " bought at least one energy drink a week." . PHP_EOL;
echo $citrusLovers . " of those prefer citrus flavored energy drinks." . PHP_EOL;


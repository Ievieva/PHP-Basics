<?php declare(strict_types=1);

function bodyMassIndex(float $weight, float $height): string
{
    $weightLbs = $weight * 2.205;
    $heightInches = $height * 39.37;
    $bmi = $weightLbs * 703 / ($heightInches ** 2);
    if ($bmi < 18.5) {
        return "You are underweight.";
    } elseif ($bmi > 25) {
        return "You are overweight.";
    } else {
        return "You are ok.";
    }
}

$weightKg = (float)readline('Enter your weight in kg: ');
$heightM = (float)readline('Enter your height in m: ');

echo bodyMassIndex($weightKg, $heightM) . PHP_EOL;

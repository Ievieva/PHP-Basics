<?php declare(strict_types=1);

$sum = (int)readline("Desired sum: ");

$numOne = 0;
$numTwo = 0;

while ($sum != $numOne + $numTwo) {
    $numOne = rand(1, 6);
    $numTwo = rand(1, 6);
    $currentSum = $numOne + $numTwo;
    echo "{$numOne} and {$numTwo} = {$currentSum}" . PHP_EOL;
}

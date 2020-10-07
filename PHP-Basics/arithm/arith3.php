<?php declare(strict_types=1);

$min = (int)readline("Enter smaller number: ");
$max = (int)readline("Enter bigger number: ");

function sumOfNum (int $min, int $max): string
{
    $total = 0;
    $average = 0;
    for ($i = $min; $i <= ($max - $min + 1); $i++) {
        $total += $i;
        $average = ($max + $min) / 2;
    }
    return 'Sum of ' . $min . ' to ' . $max . ' is ' . $total . PHP_EOL
        . 'The average is ' . $average . PHP_EOL;
}

echo sumOfNum($min, $max);

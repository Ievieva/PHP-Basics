<?php declare(strict_types=1);

$numbers = [];

$numbers[] = readline("Input the 1st number: ");

$numbers[] = readline("Input the 2nd number: ");

$numbers[] = readline("Input the 3rd number: ");

//todo print the largest number

sort($numbers, SORT_NUMERIC);

$largestNum = array_pop($numbers);

echo "The largest number is " . $largestNum . PHP_EOL;

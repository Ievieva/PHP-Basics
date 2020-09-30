<?php declare(strict_types=1);

echo "The first 10 natural numbers are: ";

//todo write a program that displays first 10 natural numbers

$natNum = range(1, 10);

foreach ($natNum as $number) {
    echo $number . ' ';
}

echo PHP_EOL;
<?php declare(strict_types=1);

$number = readline("Enter the number: ");

//todo print if number is positive or negative

if ($number < 0) {
    echo "Number $number is negative.";
} elseif ($number > 0) {
    echo "Number $number is positive.";
} elseif ($number === 0) {
    echo "Number $number is neutral.";
} else {
    echo "Not a number.";
}
echo PHP_EOL;
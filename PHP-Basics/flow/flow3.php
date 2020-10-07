<?php declare(strict_types=1);

$number = readline("Enter a positive integer: ");

function countLen($num)
{
    return strlen(strval($num));
}

if ($number < 0 || is_int($number) == false) {
    echo 'Not a positive integer.';
} else {
echo "Integer $number has " . countLen($number) . " digits.";
}
echo PHP_EOL;

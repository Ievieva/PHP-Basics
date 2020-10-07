<?php

$maxNum = (int) readline("Enter a positive integer: ");

for ($i = 1; $i <= $maxNum; $i++) {
    if  ($i % 15 == 0) {
        echo 'FizzBuzz';
    } elseif ($i % 3 == 0) {
        echo 'Fizz';
    } elseif ($i % 5 == 0) {
        echo 'Buzz';
    } else {
        echo $i;
    }
    echo ' ';
    if ($i % 20 == 0) {
        echo PHP_EOL;
    }
}
echo PHP_EOL;

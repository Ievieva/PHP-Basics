<?php declare(strict_types=1);

$i = readline("Enter number of terms: ");
$n = readline("Enter number n: ");

//todo complete loop to multiply i with itself n times,
// it is NOT allowed to use built-in pow() function

$result = $i;
$times = $n;

while ($times > 0) {
    $result *= $i;
    $times--;
}
echo "$i multiplied with itself $n times is $result." . PHP_EOL;

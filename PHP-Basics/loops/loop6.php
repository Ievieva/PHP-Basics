<?php declare(strict_types=1);

$n = (int)readline("Enter a positive integer: ");

$step = 4;
$length = ($n - 1) * 8;
$line = "";
for ($i = 0; $i < $n; $i++) {
    if ($i == 0) {
        echo str_pad($line, $length / 2, '/')
           . str_pad($line, $length / 2, '\\');
    } else {
        echo str_pad($line, ($length / 2) - ($i * $step), '/')
        . str_pad($line, 2 * $i * $step, '*')
        . str_pad($line, ($length / 2) - ($i * $step), '\\');
    }
    echo PHP_EOL;
}
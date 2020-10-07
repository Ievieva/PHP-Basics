<?php declare(strict_types=1);

$c = 'Coza';
$l = 'Loza';
$w = 'Woza';

for ($i = 1; $i <= 110; $i++) {
    if ($i % 35 == 0) {
        echo $l . $w;
    } elseif ($i % 21 == 0) {
        echo $c . $w;
    } elseif ($i % 15 == 0) {
        echo $c . $l;
    } elseif ($i % 3 == 0) {
        echo $c;
    } elseif ($i % 5 == 0) {
        echo $l;
    } elseif ($i % 7 == 0) {
        echo $w;
    } else {
        echo $i;
    }
    echo ' ';
    if ($i % 11 == 0) {
        echo PHP_EOL;
    }
}

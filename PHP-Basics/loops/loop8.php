<?php

$min = (int)readline('Min? ');
$max = (int)readline('Max? ');

$numbers = range($min, $max);
for ($j = $min; $j <= $max; $j++) {
    for ($i = 0; $i < count($numbers); $i++) {
        echo $numbers[$i];
    }
    echo PHP_EOL;
    $x = array_shift($numbers);
    array_push($numbers, $x);
}

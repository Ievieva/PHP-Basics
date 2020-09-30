<?php

$randArray = array_fill(0, 10, 0);
for ($i = 0; $i < 10; $i++) {
    $randArray[$i] = rand(1, 100);
}
$secondArray = array_fill(0, 10, 0);
for ($i = 0; $i < 10; $i++) {
    $secondArray[$i] = $randArray[$i];
}
$randArray[9] = -7;
foreach ($randArray as $item) {
    echo $item . ' ';
}
echo PHP_EOL;
foreach ($secondArray as $item) {
    echo $item . ' ';
}
echo PHP_EOL;

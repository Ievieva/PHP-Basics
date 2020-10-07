<?php declare(strict_types=1);

$num = 10;
$result = 1;

for ($i = $num; $i >= 1; $i--) {
    $result = $result * $i;
}

echo $result .  PHP_EOL;

<?php declare(strict_types=1);

function is15 (int $a, int $b): bool
{
    if ($a == 15 || $b == 15 || $a + $b == 15 || abs($a - $b) == 15) {
        return true;
    } else {
        return false;
    }
}

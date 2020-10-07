<?php declare(strict_types=1);

function checkOddEven (int $a): string
{
    if ($a % 2 == 0) {
        return $a . ' is Even Number.';
    } else {
        return $a . ' is Odd Number.';
    }
}

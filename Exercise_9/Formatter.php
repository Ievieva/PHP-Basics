<?php


class Formatter
{
    public static function format(float $amount): string
    {
        return number_format($amount, 2, '.', '');

    }
}
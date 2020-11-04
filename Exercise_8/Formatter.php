<?php


class Formatter
{
    public static function toUnits(float $amount): float
    {
        return $amount * 100;
    }

    public static function toCurrency(float $amount): string
    {
        return number_format($amount/100, 2);
    }

    public static function format(float $amount): string
    {
        return number_format($amount, 2);

    }
}
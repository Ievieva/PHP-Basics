<?php

class Date
{
    private int $month;
    private int $day;
    private int $year;

    public function __construct(int $month, int $day, int $year)
    {
        $this->month = $month;
        $this->day = $day;
        $this->year = $year;
    }

    public function setMonth(int $month): void
    {
        $this->month = $month;
    }

    public function setDay(int $day): void
    {
        $this->day = $day;
    }

    public function setYear(int $year): void
    {
        $this->year = $year;
    }

    public function month(): string
    {
        return str_pad(strval($this->month), 2, '0', STR_PAD_LEFT);
    }

    public function day(): string
    {
        return str_pad(strval($this->day), 2, '0', STR_PAD_LEFT);
    }

    public function year(): string
    {
        return $this->year;
    }

    public function displayDate(): string
    {
        return $this->month() . '/' . $this->day() . '/' . $this->year();
    }
}

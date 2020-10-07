<?php

class Triangle extends Geometry
{
    private float $base;
    private float  $height;

    public function __construct(float $base, float $height)
    {
        $this->base = $base;
        $this->height = $height;
    }

    public function calculateArea()
    {
        if ($this->base <= 0 || $this->height < 0) {
            return 'Value must be positive.';
        } else {
            return 'The area if this triangle is ' . round($this->base * $this->height * 0.5, 2);
        }
    }
}

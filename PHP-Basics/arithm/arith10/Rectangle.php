<?php

class Rectangle extends Geometry
{
    private float $length;
    private float $width;

    public function __construct(float $length, float $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    function calculateArea()
    {
        if ($this->length <= 0 || $this->width <= 0) {
            return 'Value must be positive.';
        } else {
            return 'The area if this rectangle is ' . $this->length * $this->width;
        }
    }
}

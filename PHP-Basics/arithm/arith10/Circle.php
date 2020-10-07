<?php declare(strict_types=1);

class Circle extends Geometry
{
    private float $r;

    public function __construct(float $r)
    {
        $this->r = $r;
    }

    public function calculateArea()
    {
        if ($this->r <= 0) {
            return 'Value must be positive.';
        } else{
            return 'The area if this circle is ' . round(M_PI * $this->r ** 2, 2);
        }
    }
}

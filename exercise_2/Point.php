<?php declare(strict_types=1);

class Point
{
    private float $x;
    private float $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX(): float
    {
        return $this->x;
    }

    public function setX(float $x): void
    {
        $this->x = $x;
    }

    public function getY(): float
    {
        return $this->y;
    }

    public function setY(float $y): void
    {
        $this->y = $y;
    }

    public function swapPoints(Point $point): void
    {
        $x = $this->getX();
        $this->setX($point->getX());
        $point->setX($x);

        $y = $this->getY();
        $this->setY($point->getY());
        $point->setY($y);
    }
}

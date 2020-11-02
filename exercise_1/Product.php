<?php declare(strict_types=1);

class Product
{
    private string $name;
    private float $price;
    private int $amount;

    public function __construct(string $name, float $price, int $amount)
    {
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
    }

    public function printProduct(): string
    {
        return $this->name . ', price EUR ' . $this->price . ', amount ' . $this->amount;
    }

    public function setPrice(float $newPrice): void
    {
        $this->price = $newPrice;
    }

    public function setAmount(int $newAmount): void
    {
        $this->amount = $newAmount;
    }

    public function buy(int $amount): void
    {
        if ($this->amount >= $amount) {
            $this->amount -= $amount;
        }
    }
}

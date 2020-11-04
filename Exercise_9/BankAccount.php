<?php


class BankAccount
{
    private float $amount;
    private string $name;

    public function __construct(string $name, float $amount)
    {
        $this->amount = $amount;
        $this->name = $name;
    }

    public function showUserNameAndBalance(): string
    {
        if ($this->amount < 0) {
            return $this->name . ', -$' . Formatter::format(abs($this->amount));
        }
        return $this->name . ', $' . Formatter::format($this->amount);
    }
}

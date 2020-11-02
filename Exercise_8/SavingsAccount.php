<?php


class SavingsAccount
{
    private float $amount;

    public function __construct(float $amount)
    {
        $this->amount = Formatter::toUnits($amount);
    }

    public function withdrawal(float $amount): void
    {
        $units = Formatter::toUnits($amount);
        if ($this->amount >= $units) {
            $this->amount -= $units;
        }
    }

    public function deposit(float $amount): void
    {
        $units = Formatter::toUnits($amount);
        $this->amount += $units;
    }

    public function addMonthlyInterest(int $annualInterest): void
    {
        $monthlyInterest = $annualInterest/12;
        $this->amount += $this->amount * $monthlyInterest;
    }

    public function getMonthlyInterest(int $annualInterest): string
    {
        $monthlyInterest = $annualInterest/12;
        return Formatter::toCurrency($this->amount * $monthlyInterest);
    }

    public function balance(): string
    {
        return Formatter::toCurrency($this->amount);
    }
}

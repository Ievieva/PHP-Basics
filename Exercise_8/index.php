<?php

require_once 'SavingsAccount.php';
require_once 'Formatter.php';

$deposited = readline('How much money was in the account?: ');
$savingsAccount = new SavingsAccount($deposited);

$annualInterest = readline('Enter the annual interest rate: ');
$period = readline('How many months has the account been opened? ');

$withdrawn = 0;
$interest = 0;

for ($i = 1; $i <= $period; $i++) {
    $deposit = readline('Enter amount deposited for month ' . $i . ': ');
    $savingsAccount->deposit($deposit);
    $deposited += $deposit;

    $withdrawal = readline('Enter amount withdrawn for ' . $i . ': ');
    $savingsAccount->withdrawal($withdrawal);
    $withdrawn += $withdrawal;

    $savingsAccount->addMonthlyInterest($annualInterest);

}

$interest = $deposited - $withdrawn + ($deposited - $withdrawn)*$annualInterest/12;

echo str_repeat('-=', 10) . PHP_EOL;
sleep(1);
echo 'Total deposited: $' . Formatter::format($deposited) . PHP_EOL;
echo 'Total withdrawn: $' . Formatter::format($withdrawn) . PHP_EOL;
echo 'Interest earned: $' . Formatter::format($interest) . PHP_EOL;
echo 'Ending balance: $' . $savingsAccount->balance() . PHP_EOL;



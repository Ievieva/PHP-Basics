<?php

require_once 'BankAccount.php';
require_once 'Formatter.php';

$ben = new BankAccount('Benjamin', -2343.1);

echo $ben->showUserNameAndBalance() . PHP_EOL;

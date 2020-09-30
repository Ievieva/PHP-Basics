<?php declare(strict_types=1);

$result = (int) 0;
echo "Welcome to Piglet!" . PHP_EOL;
roll:
sleep(1);
$number = (int) rand(1, 6);
echo "You rolled a $number!" . PHP_EOL;

if ($number > 1) {
    $result += $number;
    $roll = readline("Roll again? ");
    if ($roll == 'yes') {
        goto roll;
    } elseif ($roll == 'no') {
        echo "You got $result points." . PHP_EOL;
    }
} else {
    echo 'You got 0 points.' . PHP_EOL;
}


















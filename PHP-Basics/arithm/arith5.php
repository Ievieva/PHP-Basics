<?php declare(strict_types=1);

$pcNum = rand(1, 100);
$userNum = readline("I'm thinking of a number between 1-100.  Try to guess it. " . PHP_EOL);

if ($userNum < $pcNum) {
    echo "Sorry, you are too low. I was thinking of $pcNum.";
} elseif ($userNum > $pcNum) {
    echo "Sorry, you are too high. I was thinking of $pcNum.";
} else {
    echo "You guessed right! What are the odds?!?";
}
echo PHP_EOL;

<?php declare(strict_types=1);

$firstWord = (string) readline("Enter first word: ");
$secondWord = (string) readline("Enter second word: ");

$line = '';
echo $firstWord;
for ($i = 0; $i < 30 - (strlen($firstWord) + strlen($secondWord)); $i++) {
    echo '.';
}
echo $secondWord . PHP_EOL;

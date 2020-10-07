<?php declare(strict_types=1);

$words =
    [
        'knowledge', 'education', 'afternoon',
        'beautiful', 'chocolate', 'functions',
        'direction', 'influence', 'president'
    ];

again:
$currentWord = str_split($words[rand(0, 8)], 1);
$hangMan = array_fill(0, 9, '_');
$misses = [];
$blanks = 9;

while ($blanks > 0) {
    echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-" . PHP_EOL;
    echo "Word:    ";
    foreach ($hangMan as $item) {
        echo $item . ' ';
    }
    echo PHP_EOL;
    echo "Misses:	";
    foreach ($misses as $item) {
        echo $item;
    }
    echo PHP_EOL;
    $guess = (string)strtolower(readline("Guess: "));
    $arrKeys = array_keys($currentWord, $guess);

    if (count($arrKeys) > 0) {
        for ($i = 0; $i < count($arrKeys); $i++) {
            $hangMan[$arrKeys[$i]] = $guess;
            $currentWord[$arrKeys[$i]] = '_';
            $blanks--;
        }
    } else {
        $misses[] = $guess;
    }
}
echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-" . PHP_EOL;
echo "Word:    ";
foreach ($hangMan as $item) {
    echo $item . ' ';
}
echo PHP_EOL;
echo "Misses:	";
foreach ($misses as $item) {
    echo $item;
}
echo PHP_EOL;
$case = readline("YOU GOT IT!" . PHP_EOL
    . "Play \"again\" or \"quit\"? ");
if ($case == "again") {
    goto  again;
}


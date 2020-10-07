<?php declare(strict_types=1);

$board =
    [
        "   |   |   \n",
        "---+---+---\n",
        "   |   |   \n",
        "---+---+---\n",
        "   |   |   \n"
    ];

$rowColumn =
    [
        [0, 2, 4],
        [1, 5, 9]
    ];

game:
foreach ($board as $row) {
    echo $row;
}
X:
$X = (string)readline("'X', choose your location (row, column): ");
$xy = str_replace(' ', '', $X);
if ($board[$rowColumn[0][$xy[0]]][$rowColumn[1][$xy[1]]] == ' ') {
    $board[$rowColumn[0][$xy[0]]][$rowColumn[1][$xy[1]]] = 'X';
} else {
    echo 'Wrong move.' . PHP_EOL;
    goto X;
}

O:
foreach ($board as $row) {
    echo $row;
}
$O = (string)readline("'O', choose your location (row, column): ");
$xy = str_replace(' ', '', $O);
if ($board[$rowColumn[0][$xy[0]]][$rowColumn[1][$xy[1]]] == ' ') {
    $board[$rowColumn[0][$xy[0]]][$rowColumn[1][$xy[1]]] = 'O';
} else {
    echo 'Wrong move.' . PHP_EOL;
    goto O;
}
goto game;

//}
//echo 'The game is a tie.' . PHP_EOL;

//echo "'O' wins!";

//echo "'X' wins!";



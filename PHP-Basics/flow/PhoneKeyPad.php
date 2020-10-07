<?php declare(strict_types=1);

$phoneKeyPad =
    [
        2 => ' ABC', 3 => ' DEF', 4 => ' GHI',
        5 => ' JKL', 6 => ' MNO', 7 => ' PQRS',
        8 => ' TUV', 9 => ' WXYZ', 0 => '  '
    ];

$txt = (string)strtoupper(readline('Enter your text: '));

for ($i = 0; $i < strlen($txt); $i++) {
    foreach ($phoneKeyPad as $key => $value) {
        if (strpos($value, $txt[$i])) {
            echo $key;
        }
    }
}
echo PHP_EOL;

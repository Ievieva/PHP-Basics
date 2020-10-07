<?php declare(strict_types=1);

$number = (int) readline("Enter a weekday number (Sunday-Saturday 0-6): ");

if ($number >= 0 && $number < 7) {
    switch ($number) {
        case 0:
            echo 'Sunday';
            break;
        case 1:
            echo 'Monday';
            break;
        case 2:
            echo 'Tuesday';
            break;
        case 3:
            echo 'Wednesday';
            break;
        case 4:
            echo 'Thursday';
            break;
        case 5:
            echo 'Friday';
            break;
        case 6:
            echo 'Saturday';
            break;
    }
} else {
    echo "Not a valid day";
}
echo PHP_EOL;

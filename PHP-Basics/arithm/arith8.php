<?php declare(strict_types=1);

$employees =
    [
        [
            'employee' => 1,
            'basePay' => 7.50,
            'hoursWorked' => 35
        ],
        [
            'employee' => 2,
            'basePay' => 8.20,
            'hoursWorked' => 47
        ],
        [
            'employee' => 3,
            'basePay' => 10,
            'hoursWorked' => 73
        ]
    ];

function checkPay ($pay, $hours)
{
    $minPay = 8;
    $normHours = 40;
    $maxHours = 60;

    if ($pay >= $minPay && $hours <= $maxHours) {
        return '$' . $totalPay = $hours * $pay + ($hours - $normHours) * 0.5;
    } elseif ($pay < $minPay) {
        return 'Error. Base pay is too small.';
    } elseif ($hours > $maxHours) {
        return 'Error. Working hours are too long.';
    }
}

foreach ($employees as $item) {
    echo 'Employee ' . $item['employee'] . ' - ';
    echo 'Total pay: ' . checkPay($item['basePay'], $item['hoursWorked']) . PHP_EOL;
}

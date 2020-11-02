<?php declare(strict_types=1);

require_once 'Product.php';

$store = [
    new Product('Logitech mouse', 70, 14),
    new Product('iPhone 5s', 999.99, 3),
    new Product('Epson EB-U05', 440.46, 1)
];

foreach ($store as $key => $product) {
    echo $key . ': ' .  $product->printProduct() . PHP_EOL;
}

$key = readline('Choose Product No: ');

$store[$key]->buy(1);

echo $store[$key]->printProduct() . PHP_EOL;

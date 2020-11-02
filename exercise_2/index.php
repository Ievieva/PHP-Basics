<?php declare(strict_types=1);

require_once 'Point.php';

$p1 = new Point(5, 2);
$p2 = new Point(-3, 6);

$p1->swapPoints($p2);

echo "(" . $p1->getX() . ", " . $p1->getY() . ")" . PHP_EOL;
echo "(" . $p2->getX() . ", " . $p2->getY() . ")" . PHP_EOL;

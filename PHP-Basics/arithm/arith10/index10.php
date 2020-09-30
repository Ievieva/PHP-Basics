<?php declare(strict_types=1);

require_once "Geometry.php";
require_once 'Triangle.php';
require_once 'Rectangle.php';
require_once 'Circle.php';

echo "Geometry Calculator" . PHP_EOL;
echo "1. Calculate the Area of a Circle" . PHP_EOL;
echo "2. Calculate the Area of a Rectangle" . PHP_EOL;
echo "3. Calculate the Area of a Triangle" . PHP_EOL;
echo "4. Quit" . PHP_EOL;
$choice = (int)readline("Enter your choice (1-4): ");

switch ($choice) {
    case 1:
        $r = (int)readline("Enter Radius: ");
        $circle = new Circle($r);
        echo $circle->calculateArea() . PHP_EOL;
        break;
    case 2:
        $length = (int)readline("Enter Length: ");
        $width = (int)readline("Enter Width: ");
        $rectangle = new Rectangle($length, $width);
        echo $rectangle->calculateArea() . PHP_EOL;
        break;
    case 3:
        $base = (int)readline("Enter the Base: ");
        $height = (int)readline("Enter the Height: ");
        $triangle = new Triangle($base, $height);
        echo $triangle->calculateArea() . PHP_EOL;
        break;
    case 4:
        break;
    default:
        echo "The number is out of range." . PHP_EOL;
}

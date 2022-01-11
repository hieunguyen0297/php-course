<?php
/**
 * Author: Hieu Nguyen
 * Date: 1/11/2022
 * File: rectangle.php
 * Description:
 */ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
require_once 'rectangleClass.php';

//create 2 objects from the Rectangle class
$r1 = new Rectangle();
$r2 = new Rectangle();

//set width and height for r1 and r2
$r1->setWidth(30);
$r1->setHeight(20);

$r2->setWidth(5);
$r2->setHeight(10);

//calculate and display r1's area and perimeter
$area1 = $r1->calculateArea();
$perimeter1 = $r1->calculatePerimeter();
echo "Rectangle 1: area = $area1, perimeter = $perimeter1 <br>";

//calculate and display r2's area and perimeter
$area2 = $r2->calculateArea();
$perimeter2 = $r2->calculatePerimeter();
echo "Rectangle 2: area = $area2, perimeter = $perimeter2";
?>
</body>
</html>
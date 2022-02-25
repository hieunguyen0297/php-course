<?php
/**
 * Author: Hieu Nguyen
 * Date: 2/25/2022
 * File: three_dimensional_shape.class.php
 * Description: create ThreeDimensionalShape class that inherit from Shape class
 */

abstract class ThreeDimensionalShape extends Shape {
    //abstract method to return area
    abstract protected function getArea();

    //abstract method to return volume
    protected abstract function getVolume();

    //method to print information
    public function toString() {
        echo "<h2>" . $this->getName() . "</h2>";
        printf("Area: %0.2f", $this->getArea());
        printf("<br />Volume: %.2f", $this->getVolume());
    }
}
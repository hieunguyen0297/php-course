<?php
/**
 * Author: Hieu Nguyen
 * Date: 2/25/2022
 * File: cube.class.php
 * Description: create Cube class that inherit from ThreeDimensionalShape class
 */

class Cube extends ThreeDimensionalShape {
    // declare private attribute
    private $side;

    //constructor
    public function __construct($side) {
        $this->side = $side;
    }

    //method to return name
    public function getName()
    {
        return "Cube";
    }

    //method to return area
    public function getArea()
    {
        return 6 * pow($this->side, 2);
    }

    public function getVolume()
    {
        return pow($this->side, 3);
    }
}
<?php
/**
 * Author: Hieu Nguyen
 * Date: 2/25/2022
 * File: sphere.class.php
 * Description: create Sphere class that inherit from ThreeDimensionalShape
 */

//when extends from an abstract class, all the abstract protected methods need to be implemented as public for use in other place.
class Sphere extends ThreeDimensionalShape {
    //declare private attribute
    private $radius;

    //constructor
    public function __construct($r)
    {
        $this->radius = $r;
    }

    public function getName()
    {
        return "Sphere";
    }

    //method to return area
    public function getArea()
    {
        return 4 * pow($this->radius, 2) * M_PI;
    }

    //method to return the volume of sphere
    public function getVolume()
    {
        return 4/3 * pow($this->radius, 3) * M_PI;
    }
}
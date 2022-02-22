<?php
/**
 * Author: Hieu Nguyen
 * Date: 2/19/2022
 * File: pyramid.class.php
 * Description: creating pyramid class that inherit from Rectangle class
 */

class Pyramid extends Rectangle
{
    //data member
    private $height;

    //constructor
    public function __construct($width, $length, $height)
    {
        parent::__construct($width, $length);
        $this->height = $height;
    }

    //retrieve the height of the pyramid
    public function getHeight()
    {
        return $this->height;
    }

    //retrieve base area of pyramid
    public function getBaseArea()
    {
        return parent::getArea();
    }

    //retrieve volume of pyramid
    public function getVolume()
    {
        return $this->getBaseArea() * $this->height / 3;
    }

    //retrieve the lateral surface of pyramid
    public function getLateralSurface()
    {
        return $this->getLength() * sqrt(pow($this->getWidth() / 2, 2) + pow($this->getHeight(), 2)) + $this->getWidth() * sqrt(pow($this->getLength() / 2, 2) + pow($this->getHeight(), 2));
    }

    //retrieve the surface area of the pyramid
    public function getSurfaceArea()
    {
        return $this->getBaseArea() + $this->getLateralSurface();
    }

    //display object as string
    public function toString()
    {
        return json_encode(array("Width" => number_format($this->getWidth(),2), "Length" => number_format($this->getLength(),2) , "Height" => number_format($this->getHeight(),2) , "Base" => number_format($this->getBaseArea(),2), "Volume" => number_format($this->getVolume(),2), "Lateral" => number_format($this->getLateralSurface(),2), "Surface" => number_format($this->getSurfaceArea(),2)));
    }
}


<?php
/**
 * Author: Hieu Nguyen
 * Date: 2/19/2022
 * File: rectangle.class.php
 * Description: creating rectangle class
 */

class Rectangle {
    //data members of the class
    private $width;
    private $length;

    //constructor
    public function __construct($width, $length){
        $this->width = $width;
        $this->length = $length;
    }

   //retrieve the width of the rectangle
    public function getWidth()
    {
        return $this->width;
    }

    //retrieve the length
    public function getLength()
    {
        return $this->length;
    }

    //calculate area
    public function getArea(){
        return $this->width * $this->length;
    }

    //calculate perimeter
    public function getPerimeter(){
        return ($this->width + $this->length) * 2;
    }
}
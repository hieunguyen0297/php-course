<?php

/**
 * Author: Hieu Nguyen
 * Date: 1/11/2022
 * File: rectangle.class.php
 * Description: Creating Rectangle class
 */
class Rectangle
{
    //create private data members
    private $width;
    private $height;

    //create a constructor
    public function __construct($width, $height){
        $this->width = $width;
        $this->height = $height;
    }

    //create public methods to get width and height
    public function getWidth(){
        return $this->width;
    }

    public function getHeight(){
        return $this->height;
    }

    //create public methods that set a rectangle's width and height
    public function setWidth($value){
        $this->width = $value;
    }

    public function setHeight($value){
        $this->height = $value;
    }

    //create a public method that calculates a rectangle's area
    public function calculateArea(){
        return $this->width * $this->height;
    }

    //create public method to calculates the perimeter of the rectangle
    public function calculatePerimeter(){
        return ($this->width + $this->height) * 2;
    }
}
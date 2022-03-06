<?php
/**
 * Author: Hieu Nguyen
 * Date: 2/25/2022
 * File: vehicle.class.php
 * Description: create abstract Vehicle class
 *
 */

//Can not be instantiated
abstract class Vehicle
{
    private $make;

    //constructor
    public function __construct($make)
    {
        $this->make = $make;
    }

    //retrieve make
    public function getMake()
    {
        return $this->make;
    }

    //set make
    public function setMake($make)
    {
        $this->make = $make;
    }

    abstract public function horn();
}
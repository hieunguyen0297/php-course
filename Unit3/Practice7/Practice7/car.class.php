<?php
/**
 * Author: Hieu Nguyen
 * Date: 2/25/2022
 * File: car.class.php
 * Description: create Car class that inherit from Vehicle and implement the nameable interface
 */

class Car extends Vehicle implements Nameable
{
    private $name;

    //constructor
    public function __construct($make, $name)
    {
        parent::__construct($make);
        $this->name = $name;
    }

    //retrieve name
    public function getName()
    {
        return $this->name;
    }

    //set name
    public function setName($name)
    {
        $this->name = $name;
    }

    //make the car horn
    public function horn()
    {
        return "Beep Beep";
    }

    //create toString method
    public function toString()
    {
        echo "<b>Name</b>: ", $this->getName();
        echo "<br><b>Make</b>: ", $this->getMake();
        echo "<br><b>Horn Sound</b>: ", $this->horn();
    }
}
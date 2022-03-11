<?php
/**
 * Author: Hieu Nguyen
 * Date: 3/11/2022
 * File: toy.class.php
 * Description: create Toy class
 *
 */

class Toy
{
    //private data members
    private $id, $name, $description, $price;

    //constructor
    public function __construct($id, $name, $description, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    //retrieve the ID
    public function getId()
    {
        return $this->id;
    }

    //retrieve the name
    public function getName()
    {
        return $this->name;
    }

    //retrieve the description
    public function getDescription()
    {
        return $this->description;
    }

    //retrieve the price
    public function getPrice()
    {
        return $this->price;
    }

}
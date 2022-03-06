<?php
/**
 * Author: Hieu Nguyen
 * Date: 2/26/2022
 * File: person.class.php
 * Description: Create Person class
 */

class Person
{
    //private data members of the class
    private $first_name;
    private $last_name;

    //constructor
    public function __construct($first_name, $last_name)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    //retrieve person's first name
    public function getFirstName()
    {
        return $this->first_name;
    }

    //retrieve person's last name
    public function getLastName()
    {
        return $this->last_name;
    }

    //create toString method
    public function toString(){
        echo "<br><b>Name</b>: ". $this->getFirstName() . " " . $this->getLastName();
    }

}
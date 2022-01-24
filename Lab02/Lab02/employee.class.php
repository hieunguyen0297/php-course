<?php
/**
 * Author: Hieu Nguyen
 * Date: 1/23/2022
 * File: employee.class.php
 * Description: create Employee class
 */

class Employee {
    private $name;
    private $title;
    private $year;
    private $salary;

    /**
    create constructor for Employee class
     */
    public function __construct($name, $title, $year, $salary)
    {
        $this->name = $name;
        $this->title = $title;
        $this->year = $year;
        $this->salary = $salary;
    }

    //create get methods for all attributes
    //create public method to get name
    public function getName()
    {
        return $this->name;
    }

    //create public method to get title
    public function getTitle()
    {
        return $this->title;
    }

    //create public method to get year
    public function getYear()
    {
        return $this->year;
    }

    //create public method to get salary
    public function getSalary()
    {
        return $this->salary;
    }


}
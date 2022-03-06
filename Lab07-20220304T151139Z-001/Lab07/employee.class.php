<?php
/**
 * Author: Hieu Nguyen
 * Date: 2/26/2022
 * File: employee.class.php
 * Description: Abstract Employee class
 */


abstract class Employee implements Payable
{
    private $person; // object of Person class
    private $ssn;
    private static $employee_count = 0;

    //constructor
    public function __construct($person, $ssn)
    {
        $this->person = $person;
        $this->ssn = $ssn;
        self::$employee_count++;
    }

    //retrieve person object
    public function getPerson()
    {
        return $this->person;
    }

    //retrieve ssn of the employee
    public function getSsn()
    {
        return $this->ssn;
    }

    //retrieve Employee objects created
    public static function getEmployeeCount()
    {
        return self::$employee_count;
    }

    //create toString method
    public function toString() {
        echo "<b>Name: </b>" , $this->getPerson()->getFirstName(). " ". $this->getPerson()->getLastName();
        echo "<br><b>Social Security Number</b>: ". $this->getSsn();
    }

}
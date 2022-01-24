<?php
/**
 * Author: Hieu Nguyen
 * Date: 1/23/2022
 * File: company.class.php
 * Description: create company class
 */

class Company {
    private $name;
    private $established_date;
    private $url;
    private $employees;

    /**
     *create constructor for Company class
     */
    public function __construct($name, $established_date, $url, $employees)
    {
        $this->name = $name;
        $this->established_date = $established_date;
        $this->url = $url;
        $this->employees = $employees;
    }

    /** Create get methods for all attribute */
    //create public method to get name
    public function getName()
    {
        return $this->name;
    }

    //create public method to get date
    public function getEstablishedDate()
    {
        return $this->established_date;
    }

    //create public method to get url
    public function getUrl()
    {
        return $this->url;
    }

    //create public method to get employees array
    public function getEmployees()
    {
        return $this->employees;
    }

    //getTotalSalary will return total salary of all employees in the company
    public function getTotalSalary(){
        $totalSalary = 0.00;
        foreach ($this->employees as $employee){
            $totalSalary += $employee->getSalary();
        }
        return $totalSalary;
    }

}
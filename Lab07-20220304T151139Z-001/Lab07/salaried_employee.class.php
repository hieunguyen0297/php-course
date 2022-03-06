<?php
/**
 * Author: Brandon Helmick
 * Date: 3/1/22
 * File: salaried_employee.class.php
 * Description: contains the SalariedEmployee class. Inherits from Employee class.
 *              This class handles salaried employees' wages
 */

class SalariedEmployee extends Employee {

    //private attributes
    private $weekly_salary;
    private static $employee_count = 0;

    //constructor
    public function __construct($person, $ssn, $weekly_salary) {
        parent::__construct($person, $ssn);
        $this->weekly_salary = $weekly_salary;
        self::$employee_count++;
    }

    //get weekly salary
    public function getWeeklySalary() {
        return $this->weekly_salary;
    }

    //retrieve payment 
    public function getPaymentAmount() {
        return $this->getWeeklySalary();
    }

    //toString to display Salaried employees' and their wages
    public function toString() {
        echo"<h2>Salaried Employee</h2>";
        parent::toString();
        echo "<br><b>Weekly Salary:</b> $" , number_format($this->getWeeklySalary(), 2, '.', ',');
        echo"<br>";
        echo "<b>Payment Amount: </b>" , number_format($this->getPaymentAmount(), 2, '.', ',');
        echo"<br>";
    }

}

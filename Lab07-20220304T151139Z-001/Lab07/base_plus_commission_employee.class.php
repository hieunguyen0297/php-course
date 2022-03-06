<?php
/**
 * Author: Zach Czachura
 * Date: 3/3/2022
 * File: base_plus_commission_employee.class.php
 * Description: This class models an employee that receives a base salary plus commission.
 *              It inherits from the CommissionEmployee class.
 */

class BasePlusCommissionEmployee extends CommissionEmployee {
    //private attributes
    private $base_salary;

    //constructor
    public function __construct($person, $ssn, $sales, $commission_rate, $base_salary) {
        parent::__construct($person, $ssn, $sales, $commission_rate);
        $this->base_salary = $base_salary;
    }

    //retrieve base salary
    public function getBaseSalary() {
        return $this->base_salary;
    }

    //retrieve payment amount
    public function getPaymentAmount() {
        return $this->getBaseSalary() + $this->getSales() * $this->getCommissionRate() / 100;
    }

    //return string representation of employee
    public function toString() {
        parent::toString();
        echo "<br><b>Base Salary: $</b>", number_format($this->getBaseSalary(), 2, '.', ',');
        echo "<br><b>Payment Amount: $</b>", number_format($this->getPaymentAmount(), 2, '.', ',');
    }
}
<?php
/**
 * Author: Brandon Helmick
 * Date: 3/1/22
 * File: commission_employee.class.php
 * Description: contains CommissionEmployee class. Models a commission
 *              based employee
 */

//create class
class CommissionEmployee extends Employee {

    //private attributes
    private $sales;
    private $commission_rate;
    private static $employee_count = 0;

    //constructor
    public function __construct($person, $ssn, $sales, $commission_rate) {
        parent::__construct($person, $ssn);
        $this->sales = $sales;
        $this->commission_rate = $commission_rate;
        self::$employee_count++;
    }

    //retrieve sales
    public  function getSales() {
        return $this->sales;
    }

    //retrieve commission rate
    public function getCommissionRate() {
        return $this->commission_rate;
    }

    //retrieve payment
    public function getPaymentAmount() {
        $amount = ($this->sales * $this->commission_rate) / 100;
        return $amount;
    }

    //toString to display Commission employees' and their earnings
    public function toString() {
        echo"<h2>Commission Employee</h2>";
        parent::toString();
        echo "<br><b>Gross Sale:</b> $" , number_format($this->getSales(), 2, '.', ',');
        echo "<br><b>Commission Rate:</b>" , number_format($this->getCommissionRate(), 2, '.', ','), "%";
        echo "<br><b>Earnings:</b> $" , number_format($this->getPaymentAmount(), 2, '.', ',');
        echo"<br>";
    }

}

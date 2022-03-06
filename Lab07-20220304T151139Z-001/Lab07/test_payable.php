<?php
/**
 * Author: Hieu Nguyen
 * Date: 2/26/2022
 * File: test_payable.php
 * Description:  The program tests all classes in the Payable class hierarchy
 */
require_once "autoloading.php";
?>

<h1 style="margin: 20px 0px">Payroll System Programmed with OOP</h1>
<p>*********************************************************************************</p>
<?php
//make new objects of Invoice class
$i1 = new Invoice("156146165", "Samsung Galaxy S110", 1, 521.23);
$i1->toString();

echo "<p>*********************************************************************************</p>";

$i2 = new Invoice("23232332", "Stainless Steel Dog Bowl", 2, 9.99);
$i2->toString();

echo "<p>*********************************************************************************</p>";

//$p1 = new Person("Sue", "Jones");

//make new hourly employees
$he1 = new HourlyEmployee(new Person("Sue", "Jone"), "210-09-7898", 40.00, 50);
$he1->toString();

echo "<p>*********************************************************************************</p>";

//make new salaried employees
$se1 = new SalariedEmployee(new Person("Karen", "Price"), "330-31-3535", 3200.43);
$se1->toString();

echo "<p>*********************************************************************************</p>";

$se2 = new SalariedEmployee(new Person("Carter", "Smith"), "111-11-1111", 3800.33);
$se2->toString();

echo "<p>*********************************************************************************</p>";

//make new commission based employees
$ce1 = new CommissionEmployee(new Person("Bob", "Lewis"), "567-80-1257", 17090, 16.23);
$ce1->toString();

echo "<p>*********************************************************************************</p>";

$ce2 = new CommissionEmployee(new Person("Katherine", "Lewis"), "567-90-1942", 15090, 15.98);
$ce2->toString();

echo "<p>*********************************************************************************</p>";

$bce = new BasePlusCommissionEmployee(new Person("Julie", "Smith"), "233-11-1566", 14564, 14.32, 40000.00);
$bce->toString();

echo "<p>*********************************************************************************</p>";

echo "<h4>" . Employee::getEmployeeCount() . " employees have been created.</h4>";
echo "<h4>" . Invoice::getInvoiceCount() . " invoices have been created.</h4>";


?>


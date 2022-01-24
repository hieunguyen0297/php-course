<?php
/**
 * Author: Hieu Nguyen
 * Date: 1/24/2022
 * File: mycompany.php
 * Description: this is the client program that tests the Employee and Complany objects
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Company Profile</title>
    <style>
        body {
            width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        table {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th {
            background-color: #e4f1fe;
            border-top: 1px solid black;
            border-bottom: 1px solid black;
            height: 30px;
        }

        th, td {
            padding: 5px 5px;
            height: 35px;
        }

        th:nth-child(1),
        td:nth-child(1) {
            width: 200px;
        }

        th:nth-child(2),
        th:nth-child(4),
        td:nth-child(2),
        td:nth-child(4) {
            width: 125px;
            border-left: 1px solid #ccc;
        }

        th:nth-child(3),
        td:nth-child(3) {
            width: 150px;
            border-left: 1px solid #ccc;
            text-align: center;
        }

        tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        div.flexbox {
            display: flex;
            flex-direction: column;
        }

        div.row {
            display: flex;
            flex-direction: row;
            height: 25px;
        }

        div.col {
            width: 150px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php
//add your code to create Employee and Company objects
require_once 'employee.class.php';
require_once 'company.class.php';

//create 4 employees
$employee1 = new Employee("Sarah Judy", "Accountant", 4, 35000.44);
$employee2 = new Employee("Jack Smith", "Manager", 6, 51000.25);
$employee3 = new Employee("Hellen Sab", "Consultant", 3, 40100.16);
$employee4 = new Employee("John East", "Technician", 2, 30230.96);

//create an array of employees objects
$employees = array($employee1, $employee2, $employee3, $employee4);

//create Company object
$company = new Company("Rain Tech", "01-20-2022", "https://www.raintech.com", $employees);
?>

<h2 style="text-align: center">Company Profile</h2>
<div class="flexbox">
    <div class="row">
        <div class="col">Name: </div>
        <div><?= $company->getName()?></div>
    </div>
    <div class="row">
        <div class="col">Established Date:</div>
        <div><?= $company->getEstablishedDate()?></div>
    </div>
    <div class="row">
        <div class="col">Website URL:</div>
        <div><?= $company->getUrl()?></div>
    </div>
</div>
<table>
    <tr>
        <th>Employee Name</th>
        <th>Job Title</th>
        <th>Years of Services</th>
        <th>Salary</th>
    </tr>

    <?php
    // Add your code to display employees
    foreach ($company->getEmployees() as $emp){ ?>
        <tr>
            <td><?= $emp->getName() ?></td>
            <td><?= $emp->getTitle() ?></td>
            <td><?= $emp->getYear() ?></td>
            <td><?= $emp->getSalary() ?></td>
        </tr>
    <?php }
    ?>
</table>

<!-- display the total salary  -->
<h3 style="text-align: right">Total Salaries: $<?= $company->getTotalSalary()?></h3>
</body>
</html>
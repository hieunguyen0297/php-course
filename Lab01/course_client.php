<?php
/**
 * Author: Hieu Nguyen
 * Date: 1/14/2022
 * File: course_client.php
 * Description: File contains client program that tests the Course class
 */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Course Details</title>
    <style>
        body{
            display: flex;
            justify-content: center;
        }

        table{
            width: 750px;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 6px;
            text-align: left;
        }

        .container{
            margin-top: 30px;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
<?php
//import course.class file to be used in this file
require_once "course.class.php";

//create two instance of Course class
$course1 = new Course("Information Infrastructure II", "INFO-I 211", 4, "The systems architecture of distributed applications. Advanced programming, including an introduction to the programming of graphical systems.", "INFO-I 210");
$course2 = new Course("Human-Computer Interaction", "	INFO-I 300",3 , "The analysis of human factors and the design of computer application interfaces. A survey of current HCI designs with an eye toward what future technologies will allow. The course will emphasize learning HCI based on implementation and testing interfaces", "None");

?>
<div class="container">
    <h2>Course Details</h2>
    <table>
        <tr>
            <th>Title</th>
            <td><?= $course1->getTitle()?></td>
            <td><?= $course2->getTitle()?></td>
        </tr>
        <tr>
            <th>Number</th>
            <td><?= $course1->getNumber()?></td>
            <td><?= $course2->getNumber()?></td>
        </tr>
        <tr>
            <th>Credits</th>
            <td><?= $course1->getCredits()?></td>
            <td><?= $course2->getCredits()?></td>
        </tr>
        <tr>
            <th>Description</th>
            <td><?= $course1->getDescription()?></td>
            <td><?= $course2->getDescription()?></td>
        </tr>
        <tr>
            <th>Prerequisite</th>
            <td><?= $course1->getPrerequisite()?></td>
            <td><?= $course2->getPrerequisite()?></td>
        </tr>
    </table>
</div>

</body>
</html>
<?php
/**
 * Author: Hieu Nguyen
 * Date: 2/11/2022
 * File: undergrad_student.class.php
 * Description: create undergrad_student class
 */

class UndergradStudent extends Student {
    private $status; //a student's status such as freshman, sophomore, junior, senior

    //constructor
    public function __construct($name, $gender, $major, $gpa, $status)
    {
        parent::__construct($name, $gender, $major, $gpa);
        $this->status = $status;
    }

    //retrieve a student's status
    public function getStatus() {
        return $this->status;
    }
    //set a student's status
    public function setStatus($status) {
        $this->status = $status;
    }

    //display the string representation of the object
    public function toString() {
        parent::toString();
        echo "Status: ", $this->status;
    }
}
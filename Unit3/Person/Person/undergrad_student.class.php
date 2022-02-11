<?php
/**
 * Author: Hieu Nguyen
 * Date: 2/11/2022
 * File: undergrad_student.class.php
 * Description: create undergrad_student class
 */

class UndergradStudent extends Student {
    private $status; //a student's status such as freshman, sophomore, junior, senior

    //retrieve a student's status
    public function getStatus() {
        return $this->status;
    }
    //set a student's status
    public function setStatus($status) {
        $this->status = $status;
    }
}
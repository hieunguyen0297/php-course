<?php
/*
 * Author: Louie Zhu
 * Date: 2/08/2019
 * Name: student.class.php
 * Description: The Student models a student. The class inherits from the Person class.
 */
class Student extends Person {
	
	//private data members for a student's major and gpa
    private $major, $gpa;

	//public get methods
    public function getMajor() {
        return $this->major;
    }

    public function getGPA() {
        return $this->gpa;
    }

	//public set methods
    public function setMajor($major) {
        $this->major = $major;
    }

    public function setGPA($gpa) {
        $this->gpa = $gpa;
    }
} //end of class
?>

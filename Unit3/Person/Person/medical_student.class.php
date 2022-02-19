<?php
/**
 * Author: Hieu Nguyen
 * Date: 2/18/2022
 * File: medical_student.class.php
 * Description: create medical_student class
 */

class MedicalStudent extends GradStudent {
    private $mcat;
    private static $student_count;

    public function __construct($name, $gender, $major, $gpa, $program, $mcat)
    {
        parent::__construct($name, $gender, $major, $gpa, $program);
        $this->mcat = $mcat;
        self::$student_count++;
    }

    //create get method
    public function getMcat(){
        return $this->mcat;
    }

    //set MCAT score
    public function setMcat($mcat){
        $this->mcat = $mcat;
    }

    //retrieve the number of students
    public static function getStudentCount(): int {
        return self::$student_count;
    }

    //displays a string representation of a MedicalStudent o
    public function toString()
    {
        parent::toString();
        echo "<br />MCAT: ". $this->getMcat();
    }

}
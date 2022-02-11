<?php
/**
 * Author: Hieu Nguyen
 * Date: 2/11/2022
 * File: grad_student.class.php
 * Description: create grad_student class
 *
 */

class GradStudent extends Student {
    private $program;


    //create getter for program to get student's program
    public function getProgram()
    {
        return $this->program;
    }

    //create setter for program
    public function setProgram($program)
    {
        $this->program = $program;
    }

}
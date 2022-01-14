<?php
/**
 * Author: Hieu Nguyen
 * Date: 1/14/2022
 * File: course.class.php
 * Description: Create Course Class
 */

class Course{
    //create private attributes for the Course class
    private $title;
    private $number;
    private $credits;
    private $description;
    private $prerequisite;

    //create constructor
    public function __construct($title, $number, $credits, $description, $prerequisite)
    {
        $this->title = $title;
        $this->number = $number;
        $this->credits = $credits;
        $this->description = $description;
        $this->prerequisite = $prerequisite;
    }

    //create public method to get Title
    public function getTitle()
    {
        return $this->title;
    }

    //create public method to get Number
    public function getNumber()
    {
        return $this->number;
    }

    //create public method to get Credit
    public function getCredits()
    {
        return $this->credits;
    }

    //create public method to get Description
    public function getDescription()
    {
        return $this->description;
    }

    //create public method to get Prerequisite
    public function getPrerequisite()
    {
        return $this->prerequisite;
    }

}
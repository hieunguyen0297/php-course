<?php
/**
 * Author: Hieu Nguyen
 * Date: 3/11/2022
 * File: toy_controller.class.php
 * Description: create toy_controller.class
 */

class ToyController
{
    //private data members
    private $toy_model;

    public function __construct()
    {
        //create an object of the ToyModel class
        $this->toy_model = new ToyModel();
    }

    //list all toys
    public function all()
    {
        //retrieve all toys and store them in an array
        $toys = $this->toy_model->getToys();

        //if there is no toy to display, display an error message
        if (!$toys) {
            header("Location: index.php?action=error&message=No toy was found.");
            exit();
        }

        //create a new object of ToyView class
        $view = new ToyView();
        $view->display($toys);
    }

    //display an error message
    public function error($message)
    {
        //create a new object of ToyError
        $error = new ToyError();

        //display the error page
        $error->display($message);
    }

}
<?php

/*
 * Author: Louie Zhu
 * Date: 10/15/2017
 * Name: index.php
 * Description: the homepage
 */
require 'vendor/autoload.php';

//create a new object of ToyController class
$toy_controller = new ToyController();

//default action is list all toys
$action = "all";
if (isset($_GET['action']) && !(empty($_GET['action'])))
    $action = $_GET['action'];


//invoke appropriate method depending on action value
if ($action === 'all') {
    $toy_controller->all();
} else if ($action === 'error') {
    //default error message
    $message = "We are sorry, but an error has occurred.";

    //retrieve the error message
    if ((isset($_GET['message'])) && !(empty($_GET['message'])))
        $message = $_GET['message'];

    $toy_controller->error($message);

} else {
    $message = "Invalid action was requested.";
    $toy_controller->error($message);
}
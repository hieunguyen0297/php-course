<?php
/*
 * Author: Louie Zhu
 * Date: October 26, 2020
 * File: welcome_controller.class.php
 * Description: This scripts define the class for the welcome controller; this is the default controller.
 * 
 */

class WelcomeController {
    //put your code here
    public function index(){
        $view = new WelcomeIndex();
        $view->display();
    }
}

<?php
/*
 * Author: Louie Zhu
 * Date: October 26, 2020
 * Name: index.php
 * Description: The homepage
 */
//load application settings
require_once ("application/config.php");

//load autoloader
require_once ("vendor/autoload.php");

//load the dispatcher that dissects a request URL
new Dispatcher();

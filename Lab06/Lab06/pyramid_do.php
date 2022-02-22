<?php
/**
 * Author: Hieu Nguyen
 * Date: 2/19/2022
 * File: pyramid_do.php
 * Description: this file will act as a server to data to client
 */
require_once "rectangle.class.php";
require_once "pyramid.class.php";

//Get width, length, height from query string
$width = (int) $_GET['width'];
$length = (int) $_GET['length'];
$height = (int) $_GET['height'];

//make a new pyramid object
$p = new Pyramid($width, $length, $height);
echo $p->toString();

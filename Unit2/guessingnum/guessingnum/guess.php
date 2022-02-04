<?php
/**
 * Author: Hieu Nguyen
 * Date: 2/4/2022
 * File: guess.php
 * Description: guess php file is executed when there is ajax requested
 *
 */

if(isset($_COOKIE['random'])){
    $random = $_COOKIE['random'];
}else{
    $random = rand(1, 100);
    setcookie("random", $random);
}

//retrieve player’s guess
$guess = (int)($_GET['guess']);

if ($guess > $random) {
    echo json_encode(array("result" => 1));
} else if ($guess < $random) {
    echo json_encode(array("result" => -1));
} else {
    echo json_encode(array("result" => 0));
}
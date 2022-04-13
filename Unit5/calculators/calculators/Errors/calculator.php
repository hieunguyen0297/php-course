<?php

/**
 * Author Louie Zhu
 * Date: 3/28/2022
 * Description: this calculator does not handle any error.
 */

error_reporting(E_USER_ERROR);
set_error_handler("my_error_handler", E_USER_ERROR);

//variables for operands, operator, result, and error message
$operand1 = $operand2 = $operator = $result = $message = '';

//retrieve operands and operator
if (isset($_GET['operand1']) && isset($_GET['operand2']) && isset($_GET['operator'])) {
    $operand1 = $_GET['operand1'];
    $operand2 = $_GET['operand2'];
    $operator = $_GET['operator'];
}

if (!is_numeric($operand1)) {
    trigger_error("Operand 1 is not a number.", E_USER_ERROR);
}else if (!is_numeric($operand2)) {
    trigger_error("Operand 2 is not a number.", E_USER_ERROR);
}else {
    //do the operations
    switch ($operator) {
        case '+':
            $result = $operand1 + $operand2;
            break;
        case '-':
            $result = $operand1 - $operand2;
            break;
        case '*':
            $result = $operand1 * $operand2;
            break;
        case '/':
            if ($operand2 == 0){
                trigger_error("Division by zero is detected.", E_USER_ERROR);
            }
            $result = number_format($operand1 / $operand2, 2);
            break;
        default:
            $message = 'Invalid math operator';
    }
}



//generate a JSON object for the result
$response = array("result" => $result, "message" => $message);
echo json_encode($response);


//custom error handler
function my_error_handler($errno, $errstr) {
    global $message;
    $message = "Fatal error:<br>[$errno] $errstr";
}
<?php

/**
 * Author Louie Zhu
 * Date: 3/28/2022
 * Description: this calculator application handles the division by zero exception with the Exception class
 */
//variables for operands, operator, result, and error message
$operand1 = $operand2 = $operator = $result = $message = '';

//retrieve operands and operator
if (isset($_GET['operand1']) && isset($_GET['operand2']) && isset($_GET['operator'])) {
    $operand1 = $_GET['operand1'];
    $operand2 = $_GET['operand2'];
    $operator = $_GET['operator'];
}

//do the operations
try {

    if ($operand1 == "") {
        throw new RequiredValueException("Fatal Error:<br> Operand 1 is
 missing.<br>");
    }
    if ($operand2 == "") {
        throw new RequiredValueException("Fatal Error:<br> Operand 2 is
 missing.<br>");
    }

    if (!is_numeric($operand1)) {
        throw new DataTypeException(gettype($operand1), "number");
    }
    if (!is_numeric($operand2)) {
        throw new DataTypeException(gettype($operand2), "number");
    }

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
            if ($operand2 == 0)
                throw new DivisionByZeroException();
            else {
                $result = number_format($operand1 / $operand2, 2);
            }
            break;
        default:
            $message = 'Invalid math operator';
    }
}catch (DivisionByZeroException $e) {
    $message = $e->getDetails();
} catch (DataTypeException $e) {
    $message = $e->getMessage();
} catch (RequiredValueException $e) {
    $message = $e->getMessage();
} catch (Exception $e) {
    $message = $e->getMessage();
}


//generate a JSON object for the result
$response = array("result" => $result, "message" => $message);
echo json_encode($response);
?>

<?php
class DivisionByZeroException extends Exception
{
    public function getDetails()
    {
        return " Fatal Error:<br> Division by zero";
    }
}


class DataTypeException extends Exception
{
    public function __construct($in_type, $in_expected)
    {
        parent::__construct("Data type error:<br>"
            . "Expected: $in_expected<br>"
            . "Received: $in_type");
    }
}

class RequiredValueException extends Exception
{
    //leave it empty. Simply reuse features in the parent class
}
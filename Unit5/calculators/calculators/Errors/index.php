<?php
/* Author: Louie Zhu
 * Date: 3/28/2022
 * Name: index.php 
 * Description: This project demonstrates error handling in PHP. This web page creates the interface of the calculator.
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Error Handling in PHP</title>
        <script type="text/javascript" src="calculator.js"></script>
    </head>

    <body style="margin: 10px 0px 0px 20px ">
        <h1 align="center">Error Handling in PHP</h1>

        <table border="1" cellspacing="0" cellpadding="10" align="center" style="border: 10px outset gray; padding: 1px;">
            <tr>
                <td width="120" align="right">Enter a number:</td>
                <td width="120"><input id="operand1" type="text" size="10" /></td>
            </tr>
            <tr>
                <td  align="right">Enter a number:</td>
                <td><input id="operand2" type="text" size="10" /></td>
            </tr>
            <tr>
                <td  align="right">Result:</td>
                <td><div id="result" style="border-width: 0; background-color:#E9E9E9"></div></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input name="addition" type="button" value="  +  " onclick="dothemath(this.value)" />
                    <input name="subtraction" type="button" value="  -  " onclick="dothemath(this.value)" />
                    <input name="multiplication" type="button" value="  x  " onclick="dothemath('*')" />
                    <input name="division" type="button" value="  /  " onclick="dothemath(this.value)" />
                </td>
            </tr>
            <tr>
                <td colspan="2" align="left" height="90"><div id="message"></div></td>
            </tr>
        </table>


    </body>
</html>
<?php
/**
 * Author: Hieu Nguyen
 * Date: 2/26/2022
 * File: payable.class.php
 * Description: this file contains interface that implements by Employee and Invoice class
 */


interface Payable
{
    //abstract method is used to implement in Employee and Invoice class
    public function getPaymentAmount();

    public function toString();
}
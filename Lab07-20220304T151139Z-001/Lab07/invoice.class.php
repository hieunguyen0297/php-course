<?php
/**
 * Author: Hieu Nguyen
 * Date: 2/26/2022
 * File: invoice.class.php
 * Description: this class implement the Payable interface
 */

class Invoice implements Payable
{
    //private date members
    private $part_number;
    private $part_description;
    private $quantity;
    private $price_per_item;

    //static attribute that keep track of Invoice objects created
    private static $invoice_count = 0;

    //constructor
    public function __construct($part_number, $part_description, $quantity, $price_per_item)
    {
        $this->part_number = $part_number;
        $this->part_description = $part_description;
        $this->quantity = $quantity;
        $this->price_per_item = $price_per_item;
        self::$invoice_count++;
    }

    //retrieve part number
    public function getPartNumber()
    {
        return $this->part_number;
    }

    //retrieve part description
    public function getPartDescription()
    {
        return $this->part_description;
    }

    // retrieve quantity
    public function getQuantity()
    {
        return $this->quantity;
    }

    //retrieve item's price
    public function getPricePerItem()
    {
        return $this->price_per_item;
    }

    //retrieve number of invoice created
    public static function getInvoiceCount(): int
    {
        return self::$invoice_count;
    }

    //get the payment
    public function getPaymentAmount()
    {
        return $this->quantity * $this->price_per_item;
    }

    //create toString method
    public function toString()
    {
        echo "<h2>Invoice</h2>";
        echo "<b>Part Number</b>: " . $this->getPartNumber();
        echo "<br><b>Part Name</b>: " . $this->getPartDescription();
        echo "<br><b>Quantity</b>: " . $this->getQuantity();
        echo "<br><b>Price</b>: " . "$" . $this->getPricePerItem();
        echo "<br><b>Payment</b>: " . "$" . $this->getPaymentAmount();
    }
}
<?php
/**
 * Author: Hieu Nguyen
 * Date: 2/12/2022
 * File: population.php
 * Description: this file handle client request. it will interact with the database to retrieve data.
 */

require_once "population.class.php";

//retrieve query string data
$query_term = filter_input(INPUT_GET, 'name', FILTER_SANITIZE_STRING);

//create a new population object to retrieve data from database
$p = new Population();
echo json_encode($p->lookup($query_term));

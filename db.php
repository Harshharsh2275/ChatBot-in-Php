<?php

/**
 * 
 * @author HarshPathak
 * 
 * @version 0.1.01
 * 
 * @license GNU GPL v3
 * 
 * This is chat bot which can be trained easily and use to interact with customers
 * This Bot(vishal) is developed by HarshPathak("owner") H.A.V.E.R.S Pvt. ltd.
 */


// itianalizing database coonection 

$connect = new mysqli('127.0.0.1','root','','chat');
if ($connect->connect_errno) {
    die("Error occured while connecting".$connect->connect_error);
}

?>
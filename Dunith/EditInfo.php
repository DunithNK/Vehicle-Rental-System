<?php
session_start();



$fname = $_POST["fname"];
$un = $_POST["un"];
$lname = $_POST["lname"];
$password = $_POST["password"];
$contactNumber = $_POST["contactNumber"];



$Cus_rs = new mysqli("localhost", "root", "", "project1", "3306"); // connection eka hadagaththa

$cus = $Cus_rs->query("UPDATE `userdetails` 
SET `firstName` = '".$fname."', `lastName` = '".$lname."' , `pNumber` = '".$contactNumber."' , `userName` = '".$un."', `password` = '".$password."' 
WHERE `userName` = '".$_SESSION["userdetails"]."'
");


echo("Update Success");






?>
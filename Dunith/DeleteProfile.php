<?php
session_start();

$Cus_rs = new mysqli("localhost", "root", "", "project1", "3306");

$cus = $Cus_rs->query("DELETE FROM `userdetails` WHERE `userName` = '".$_SESSION["userdetails"]."'");
echo("Delete Success");



?>
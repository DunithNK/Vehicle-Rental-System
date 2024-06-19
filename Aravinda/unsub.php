<?php
$uname = $_POST["uname"];
$email = $_POST["email"];

$conn = new mysqli("localhost", "root", "", "project1", "3306");
$cus = $conn->query("DELETE  FROM `newsletters` WHERE `uName` = '".$uname."' ");

 echo("Delete Success");
?>
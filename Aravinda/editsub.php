<?php

$uname = $_POST["uname"];
$email = $_POST["email"];

$conn = new mysqli("localhost", "root", "", "project1", "3306");
$conn->query("UPDATE `newsletters` SET `email` = '".$email."'
 WHERE `uName` = '" . $uname . "' ");

 echo("Update Success");

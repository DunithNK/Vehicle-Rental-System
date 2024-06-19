<?php
    $conn = new mysqli("localhost", "root", "", "project1", "3306");

    $uName = $_POST["uname"];
    $email = $_POST["email"];
    $review = $_POST["review"];

    $sql = "INSERT INTO reviews(uname,email,review) ";
    $sql .= "VALUES ('$uName','$email','$review')";

    if($conn->query($sql))
    {
        echo "<script>alert('Review Submitted !')
        window.location.href='../Aravinda/home.php';</script>";
       
    }
    else
    {
        echo "<script>alert('Error in Insertion')</script>";
    }

    $conn->close();



?>
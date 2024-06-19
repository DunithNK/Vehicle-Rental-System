<?php
    include 'config.php';
    $email = $_POST["email"];
    $Uname = $_POST["uname"];

    $sql = "INSERT INTO newsletters(email,uName) ";
    $sql .= "VALUES ('$email','$Uname')";

    if($conn->query($sql))
    {
        echo "<script>alert('Subscribed !')
        window.location.href='home.php';</script>";
    }
    else
    {
        echo "<script>alert('Error in Insertion')</script>";
    }
    $conn->close();
?>
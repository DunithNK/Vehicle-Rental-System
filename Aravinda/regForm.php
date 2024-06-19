<?php
    include_once 'config.php';

    $fname = $_POST["Fname"];
    $lname = $_POST["Lname"];
    $uname = $_POST["Username"];
    $pass = $_POST["Pass"];
    $rePass = $_POST["rePass"];
    $PNumber = $_POST["PhoneNumber"];
    $email = $_POST["email"];
    $id = $_POST["id"];
    
    

    if($pass == $rePass)    //Checking the re-enter password
    {
        $sql = "INSERT INTO userdetails (firstName,lastName,userName,password,pNumber,email,ID) ";
        $sql .= "VALUES ('$fname','$lname','$uname','$pass','$PNumber','$email','$id')";
    }

    else{
        echo "<script>alert('Password does not match!')
        window.location.href='home.php'</script>";          //Source: Stack Overflow
    }

    if($conn->query($sql))

    {
        echo "<script>alert('Inserted Successfully')
        window.location.href='home.php';</script>";         //Source: Stack Overflow
    }

    else

    {
        echo "<script>alert('Error in Insertion')</script>";
    }


    //close the connection

    $conn->close();



?>
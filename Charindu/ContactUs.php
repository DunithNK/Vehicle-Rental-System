<?php

session_start();

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $conn = new mysqli("localhost", "root", "", "project1", "3306");

 $sql = "INSERT INTO contactus (name, email, message) VALUES ('$name', '$email', '$message')";
//  $result = mysqli_query($conn, $sql);


//Source : Github

 if($conn->query($sql))
    {
        echo "<script>alert('Form Submitted')
        window.location.href='../Aravinda/home.php';</script>";
        // header("Location:home.php");
    }
    else
    {
        echo "<script>alert('Error in Insertion')</script>";
    }

    $conn->close();

}
?>
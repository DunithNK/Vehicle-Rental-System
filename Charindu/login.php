<?php 
session_start();

//check whether the form is submitteed 

if($_SERVER['REQUEST_METHOD']== 'POST')
{
  $username = $_POST['username'];
  $password = $_POST['password'];

  $conn = new mysqli("localhost","root","","project1","3306");
  $sql = "SELECT * FROM userdetails WHERE userName = '$username' AND password = '$password'";
  $ResultSession = $conn->query($sql);      //Source : Github
  $result = $conn->query($sql);

  // $result = mysqli_query($conn,$sql);

  if (mysqli_num_rows($result)== 1){      //Source : Github
    $_SESSION['userName'] = $username;
    $_SESSION['userdetails'] = $username;

    // header('location : ../Dunith/userprofile.php');
    header('Location: https://localhost/Project/Dunith/userprofile.php');
  }
  else{
    echo 'Invalid username or password';
  }

}
?>

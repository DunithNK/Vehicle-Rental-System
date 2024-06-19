<?php
session_start();

if(isset($_SESSION["userdetails"])){
?>

<!DOCTYPE html>
<html>
<head>
    <title>Previous Page</title>
    <style>
        body {
        font-family: Product Sans, bold;
        background-color: PALEGOLDENROD;
      }
      .container {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
      h2 {
        text-align: center;
      }
      label {
        display: block;
        margin-bottom: 10px;
      }
      input[type="text"],
      input[type="email"],
      textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
      }
      textarea {
        height: 150px;
      }
      input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
        background-color: DARKKHAKI;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }
      input[type="submit"]:hover {
        background-color: DARKOLIVEGREEN;
      }

    </style>
</head>
<body>
    <div class="container">
      <h2>Reservation</h2>
      <p>Please fill this form</p>
      <form action="../Hiruni/index/index.php" method="POST">
        <label>Date:</label>
        <input type="date" id="date" name="date" required>

        <label>Time:</label>
        <input type="time" id="time" name="time" required>

        <label>Expiring Date:</label>
        <input type="date" id="expiring_date" name="expiring_date" required>

        <label>Number of Days:</label>
        <input type="number" id="num_of_days" name="num_of_days" required>

        <label>vehicle id:</label>
        <input type="number" id="vehicle_id" name="vehicle_id" required>

        <input type="submit" value="Submit">
      </form>
    </div>

</body>
</html>
<?php
}

else{
  header('location:../Charindu/loginpage.php');
}

?>

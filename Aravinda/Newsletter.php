  <?php
    session_start();
  ?>
  
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>Newsletter</title>
    <link rel = "stylesheet" href = "Styles/NL.css">
  </head>

  <body>

    <div class="container">
      <h1>Newsletter</h1>
      <?php
      $conn = new mysqli("localhost", "root", "", "project1", "3306");

      $cus = $conn->query("SELECT * FROM `newsletters` WHERE `uName` = '" . $_SESSION["userdetails"] . "' ");

      $cus_data = $cus->fetch_assoc();
      $cus_num = $cus->num_rows;



      if ($cus_num == 1) {
      ?>
        <label>UserName:</label>
        <input type="text" id="uname" name="uname" value="<?php echo $cus_data["uName"] ?>" required>

        <label>Email:</label>
        <input type="text" id="email" name="email" value="<?php echo $cus_data["email"] ?>" required>

        <Button onclick="EditEmail();">Edit Email</Button>
        <Button onclick="unsubscribe();">Unsubscribe</Button>



      <?php
      } else if ($cus_num == 0) {
      ?>
        <label>UserName:</label>
        <input type="text" id="uname" name="uname" required>

        <label>Email:</label>
        <input type="text" id="email" name="email" required>

        <Button onclick="Subscribe();">Subscribe</Button>

      <?php
      }

      ?>

    </div>

<script src="script.js"></script>
  </body>

  </html>
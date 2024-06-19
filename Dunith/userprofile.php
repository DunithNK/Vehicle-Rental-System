

<?php
session_start();
// $_SESSION["userdetails"] = 22222;

// include_once 'config.php';

$Cus_rs = new mysqli("localhost", "root", "", "project1", "3306");

$cus = $Cus_rs->query("SELECT * FROM `userdetails` WHERE `userName` = '" . $_SESSION["userdetails"] . "' ");

$cus_data = $cus->fetch_assoc();


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>User Profile</title>

  <style>
    #nav { 
    list-style-type: none;
	margin: 0px;
	padding: 15px;
	overflow: hidden;
	background-color: DARKKHAKI;
	border-radius: 15px;
}

li a {
	float: left; 
	padding: 15px;
	color: DARKSLATEGREY;
	text-align:right;
	text-decoration: none;
    font-family: Product Sans, bold;
}

    .img {
      margin-top: 50px;
      margin-left: 50px;
    }

    .profieDetails {
      display: flex;
      font-family: Product Sans, bold;
    }

    .details {
      margin-top: 50px;
      margin-left: 30px;
    }

    .contentArea {
      font-family: Product Sans, bold;
      margin-top: 20px;
      border: 3px solid white;
      border-radius: 50px;
      margin: 20px;
      background-color: DARKKHAKI;
    }

    .firstRow {
      display: flex;
      justify-content: center;
      margin-top: 50px;
      justify-content: flex-start;
    }

    .ThirdRow {
      display: flex;
      margin-left: 295px;
      margin-top: 50px;
    }

    .one {
      /* margin: 10px; */
      margin-left: 20px;
    }


    .button {
      font-weight: bold;
      background-color: gray;
      color: white;
      font-size: 20px;
      margin: 20px;

    }
  </style>
</head>

<body style="background-color: PALEGOLDENROD;">

<ul id="nav">
    <li><a href="../Aravinda/home.php">Home</a></li>
    <li><a href="catalogue.php">Catalogue</a></li>
    <li><a>Reviews</a></li>
    <li><a href="../Charindu/ContactUspage.html">Contact Us</a></li>
</ul>


  <div class="container">
    <!-- Profile Details -->
    <div class="profieDetails">
      <div class="imageDIv">
        <img class="img" src="images/pro.png" style="width: 150px; height: 150px;">
      </div>
      <div class="details">
        <label style="font-size: 40px;font-weight: bold;"><?php echo $cus_data["firstName"]." ".$cus_data["lastName"]?></label><br>

        <label><?php echo $cus_data["ID"]?></label>
      </div>
    </div>

    <!-- details TextField -->

    <div>
      <div class="contentArea">

        <div class="firstRow">
          <div class="one">
                  <label>First Name</label><br>
            <input type="text" id="fname" value="<?php echo $cus_data["firstName"]; ?>">
          </div>

          <div class="one">
            <label>UserName</label><br>
            <input type="text" id="un" value="<?php echo $cus_data["userName"] ?>">
          </div>

          
        </div>

        <!-- second -->
        <div class="firstRow">
          <div class="one">
            <label>Last Name</label><br>
            <input id="lname" type="text" value="<?php echo $cus_data["lastName"] ?>">
          </div>

          <div class="one">
            <label>Password</label><br>
            <input type="password" id="password" value="<?php echo $cus_data["password"] ?>">
          </div>

          <div class="one">
            <label>Phone Number</label><br>
            <input type="text" id="contactNumber" value="<?php echo $cus_data["pNumber"] ?>">
          </div>


        <!-- third -->
        <div class="ThirdRow" style="margin-bottom: 50px;">

          <br>

        </div>

        <div style="display: flex; justify-content: center;">
          <div>
            <button class="button" onclick="EditDetails()">Edit</button>
          </div>

          <div>
            <button class="button" onclick="Delete();">Delete</button>
          </div>

          <div>
            <button class="button" onclick=" window.location = '../Charindu/loginpage.php' ">Logout</button>
          </div>
        </div>
      </div>

    </div>
    <script src="script.js"></script>
</body>

</html>
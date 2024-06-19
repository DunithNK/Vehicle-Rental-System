<?php

$orderNumber = "ORD" . mt_rand(100000, 999999);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $date = $_POST["date"];
    $time = $_POST["time"];
    $expiringDate = $_POST["expiring_date"];
    $numOfDays = $_POST["num_of_days"];
    $vehicleId = $_POST["vehicle_id"];

   
    // $host = "localhost";
    // $username = "root";
    // $password = "";
    // $database = "rent";

 
    // $conn = mysqli_connect($host, $username, $password, $database);
    $conn = new mysqli("localhost", "root", "", "project1", "3306");


    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    
    $query = "SELECT rent_per_day FROM cars WHERE vehicle_id = '$vehicleId'";
    $result = mysqli_query($conn, $query);
    
 
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $rentPerDay = $row["rent_per_day"];
    } else {
       
        $rentPerDay = 0;
    }

   
    $totalPrice = $rentPerDay * $numOfDays;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Order Bill</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="bill">
    <div class="tick">
            <img src="tick.png" alt="tick">
        </div>
        <h2>Order Successfully Placed <i class="fas fa-check-circle"></i></h2>

        <div class="columns">
            <div class="column">
                <ul>
                    <li><strong>Order Number:</strong> <?php echo $orderNumber; ?></li>
                    <li><strong>Date:</strong> <?php echo $date ?? ""; ?></li>
                    <li><strong>Time:</strong> <?php echo $time ?? ""; ?></li>
                    <li><strong>Expiring Date:</strong> <?php echo $expiringDate ?? ""; ?></li>
                    <li><strong>Total Price:</strong> <?php echo $totalPrice ?? ""; ?></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>

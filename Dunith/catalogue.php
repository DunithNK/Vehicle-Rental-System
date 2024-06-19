<!DOCTYPE html>
<html>
<head>

  <ul id="nav">
    <li><a href="../Aravinda/home.php">Home</a></li>
    <li><a href="catalogue.php">Catalogue</a></li>
    <li><a>Reviews</a></li>
    <li><a href="../Charindu/ContactUspage.html">Contact Us</a></li>
    <li><a href="../Hiruni/about/about.html">About Us</a></li>
</ul>

  <title>Vehicle Catalogue</title>
  <style>
    /* CSS styling for the catalog page */

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

    body {
      background-color: PALEGOLDENROD;
      font-family: Product Sans, bold;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 100%;
      margin: 0 auto;
      padding: 20px;
    }
    h1 {
      text-align: center;
      color: DARKOLIVEGREEN;
    }
    .vehicle-card {
      background-color: DARKKHAKI; 
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 20px;
      margin-bottom: 20px;
      display: flex;
    }
    .vehicle-card img {
      max-width: 300px;
      margin-right: 20px;
    }
    .vehicle-card .details {
      flex-grow: 1;
    }
    .vehicle-card h2 {
      margin-top: 0;
    }
    .vehicle-card p {
      margin-bottom: 10px;
    }
    .vehicle-card .price {
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Car2Go</h1>
    <hr></hr>

    <div class="vehicle-card">
      <img src="images\aqua.jpg" alt="Car 1">
      <div class="details">
        <h2>Toyota Aqua</h2>
        <p>Brand: Toyota</p>
        <p>Model: Aqua</p>
        <p>Color: Silver</p>
        <p class="price">Price: LKR1250/day</p>
        <a href="../Chathushki/reservation.php"><button>Book Now</button></a>
      </div>
    </div>

    <div class="vehicle-card">
      <img src="images\prius.jpg" alt="Car 2">
      <div class="details">
        <h2>Toyota Prius</h2>
        <p>Brand: Toyota</p>
        <p>Model: Prius</p>
        <p>Color: White</p>
        <p class="price">Price: LKR1500/day</p>
        <a href="../Chathushki/reservation.php"><button>Book Now</button></a>
      </div>
    </div>

    <div class="vehicle-card">
        <img src="images\leaf.jpg" alt="Car 2">
        <div class="details">
          <h2>Nissan Leaf</h2>
          <p>Brand: Toyota</p>
          <p>Model: Prius</p>
          <p>Color: White</p>
          <p class="price">Price: LKR1750/day</p>
          <a href="../Chathushki/reservation.php"><button>Book Now</button></a>
        </div>
      </div>

      <div class="vehicle-card">
        <img src="images\alto.jpg" alt="Car 2">
        <div class="details">
          <h2>Suzuki Alto</h2>
          <p>Brand: Toyota</p>
          <p>Model: Prius</p>
          <p>Color: White</p>
          <p class="price">Price: LKR1500/day</p>
          <a href="../Chathushki/reservation.php"><button>Book Now</button></a>
        </div>
      </div>

      <div class="vehicle-card">
        <img src="images\stingray.jpg" alt="Car 2">
        <div class="details">
          <h2>Suzuki Stingray</h2>
          <p>Brand: Toyota</p>
          <p>Model: Prius</p>
          <p>Color: White</p>
          <p class="price">Price: LKR1350/day</p>
          <a href="../Chathushki/reservation.php"><button>Book Now</button></a>
        </div>
      </div>


  </div>
</body>
</html>

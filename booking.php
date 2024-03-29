<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Book Ticket</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/slick.css">
<link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet">
<link rel="stylesheet" href="css/main.css">
</head>

<body>

	<?php
	$conn =mysqli_connect("localhost", "root","","bts");

	session_start();
	if (!(isset($_SESSION['email']))) {
	    session_destroy();
	    header("location:home.php");
	} else {
	    $name     = $_SESSION['name'];
	    $email = $_SESSION['email'];

	    $conn =mysqli_connect("localhost", "root","","bts");
			echo '<span class="pull-right top title1" ><span style="color:white"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <span class="log log1" style="color:lightyellow">' . $name . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></button></a></span>';
	}

	?>



	<section class="navbar_full">

	<div class="nav">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#"> <img src="images/buslogo.png"></a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>


	  <div class="collapse navbar-collapse item_custom" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">


	      <li class="nav-item">
	        <a class="nav-link" href="menu.php">Home</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Bus Time</a>
	      </li>
				<li class="nav-item">
	        <a class="nav-link" href="receipt.php">Booking History</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="booking.php">Booking</a>
	      </li>
	            <li class="nav-item">
	        <a class="nav-link" href="logout.php">Logout</a>
	      </li>

	    </ul>

	  </div>
	</nav>
	</div>
	</section>






<section class="booking">
	<div class="container">
		<div class="row">

		<div class="col-md-3"></div>
		<div class="col-md-6">
		<h3 class="h3_txt">
			Booking Form
		</h3>

		<form action="function.php" method="post">


			<div class="form-row">
      <input type="text" class="form-control custom_form" name="name" placeholder="Name" required>
    </div>

		<div class="form-row">
		<input type="text" class="form-control custom_form" name="phone" placeholder="Phone No" required>
	  </div>

			<div class="form-row">
      <input type="text" class="form-control custom_form" name="departure_date" placeholder="Departure date" required>
    </div>

    <div class="form-row">
      <input type="text" class="form-control custom_form" name="bus_name" placeholder="Bus Name" required>
    </div>

    <div class="form-row">
    <div class="form-group col-md-6">
      <input type="" class="form-control custom_form" id="inputFrom" name="destination" placeholder="Destination" required>
    </div>
    <div class="form-group col-md-6">

      <input type="text" class="form-control custom_form" id="inputTo" name="departure_time" placeholder="Departure time" required>
    </div>
  </div>

  <center><input type="submit" name="booking_submit" class="btn btn-primary" value="Confirm Booking"  <br></center>

</form>
		</div>
		<div class="col-md-3"></div>

		</div>
	</div>
</section>





<!---======================================All script file is add here==================================-->
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script> <script src="js/slick.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>

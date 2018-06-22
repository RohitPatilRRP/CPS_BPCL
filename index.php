<?php
include('connect.php');
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head><link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
	<title>Vehicle Parking System</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Heebo|Indie+Flower" rel="stylesheet">
	  <style type="text/css">
  	#lgout:hover{
  		background-color: green;
  		color: white;
  		transition: background-color 0.5s, color 0.5s;
  	}
  </style>
</head>
<body>
	
	<div class="limiter">
		<div style="background-color: blue;padding: 1%;font-size: 30px;color: white;">
			<div style="margin-left: 2%;">
			<img src="https://www.bharatpetroleum.com/images/bpcl_logo_1.jpg" alt="Bharat Petroleum Corporation Limited" style="width: 8%;margin-left:23px;">
		<h3 style="font-size:25px;color: blue;font-family: 'Indie Flower', cursive;">energising lives</h3></div>
		<center><h3 style="margin-top: -9%;font-family: 'Heebo', sans-serif;">Vehicle Parking Management System </h3></center>
		</div>
		<div class="container-login100"> 
			<div class="wrap-login100" style="margin-top: -3%;">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-26">
						Admin Login
					</span>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="name">
						<span class="focus-input100" data-placeholder="Name"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<input type="submit" name="login" id="lgout" value="Login" style="width: 100%;padding: 5px;">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>

</body>
</html>

<?php

if(isset($_POST['login'])){
$name=$_POST['name'];
$pass=$_POST['password'];
$_SESSION['user']= $name;
	$sql="SELECT * FROM users WHERE name='$name' AND password='$pass';";
	$res=mysqli_query($db,$sql);
	if(mysqli_num_rows($res)>0){
	header("Location:menu.php");
}
else{
	alert("User Not Found");
}
}

?>
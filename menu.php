
<?php
include('connect.php');

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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div style="background-color: blue;padding: 1%;font-size: 30px;color: white;">
	<img src="bpcl.jpg" style="width: 5%">	Vehicle Parking Management System.
		<button  class="btn btn-danger" onclick="window.location.href='logout.php'" style="float: right;margin-right: 4%;color: white">Logout</button>
	</div><br><br>
<?php
$sql= "select plotno from slots where available='Yes';";
$res=mysqli_query($db,$sql);
if(mysqli_num_rows($res)>0){
?>

<div class="container">  
<h3>Slots Available , select an action :</h3>             
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Entry Type
    </button>
    <ul class="dropdown-menu">
      <li><a href="entry.php">Vehicle Entry</a></li>
      <li><a href="exit.php">Vehicle Exit</a></li>
    </ul>
  </div>
<?php

}
	else{

		?>
		<h3>No slots Available</h3> 
		</div><br><br>
		<?php
	}
?>
<br>
 <button class="btn btn-primary" type="button"><a href="preview.php" style="text-decoration: none;color: white">View Slots occupied</button>
<br>
    <br>
<center>
	<iframe width="1000" height="500" src="https://www.youtube.com/embed/_LJ_pAALhLU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></center>
</body>
</html>
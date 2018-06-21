
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
		<button  class="btn btn-danger" onclick="window.location.href='logout.php'" style="float: right;margin-right: 4%;color: white;margin-top:1.5%;">Logout</button>
	</div><br><br>
<?php
$sql= "select plotno from slots where available='Yes';";
$res=mysqli_query($db,$sql);
if(mysqli_num_rows($res)>0){
?>

<div class="container">  
<h3>Slots Available , select an action :</h3>  <br>           
  <div class="dropdown" >
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Vehicle Entry Type
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
<div style="height: 10px;"><button class="btn btn-primary" type="button"><a href="preview.php" style="text-decoration: none;color: white;float: right;">View Slots occupied</button></a></div>
 
<br>
    <br><br>
    <div style="float: left;width: 50%;">
	<iframe width="450" height="250" src="https://www.youtube.com/embed/_LJ_pAALhLU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
	<div style="margin-left: 50%;margin-top:-2%;"> 
<h2 style="color: black;pointer-events: none;
cursor: default;">About BPCL</h2>
<p>On 15th December 1951, the Burmah Shell Group signed an agreement with the Government of India to build a modern refinery at Trombay, Bombay. Soon after, on 3rd November 1952, Burmah Shell Refineries Limited was incorporated as a private limited company under the Indian Companies Act and began working on the marshlands of Trombay.

With relentless hours of work and effort put in by both man and machine, the swamps gave way to towers, tanks of steel and miles of pipeline. Soon, the refinery spread over 454 acres of land at Mahul, went on-stream on 30th January 1955, one year ahead of schedule.

Dr. S. Radakrishnan, the then Vice President of India, declared the 2.2 MMTPA (Million Metric Tonnes Per Annum) Refinery open on 17th March 1955, making it the largest refinery in India then.</p>
	</div>
</body>
</html>
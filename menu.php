
<?php
include('connect.php');
session_start();
if(isset($_SESSION['user'])){

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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div style="background-color: blue;padding: 1%;font-size: 30px;color: white;">
	<img src="bpcl.jpg" style="width: 5%">	Vehicle Parking Management System.
		<button  class="btn btn-danger" onclick="window.location.href='logout.php'" style="float: right;margin-right: 4%;color: white;margin-top:1.5%;">Logout</button>
    <h3 style="margin-right: 4%;float: right;">Welcome , <?php echo ucfirst($_SESSION['user']) ?></h3>
	</div><br><br>
<div class="container">
	<div>  
<?php
$sql= "select plotno from slots where available='Yes';";
$res=mysqli_query($db,$sql);
if(mysqli_num_rows($res)>0){
?>

<h3>Slots Available , select an action :</h3>  <br>           
    <button  class="btn btn-primary" onclick="window.location.href='entry.php'" >Vehicle Entry</button>
      <button  class="btn btn-primary" onclick="window.location.href='exit.php'" >Vehicle Exit</button><br>
<?php

}
	else{

		?>
		<h3>No slots Available</h3> 
    <button class="btn btn-primary " type="button">
    <a href="exit.php" style="text-decoration: none;color: white;">Vehicle Exit</a></button>
		</div><br>
		<?php
	}
?>
<br>
<div style="height: 10px;"><button class="btn btn-primary" type="button"><a href="preview.php" style="text-decoration: none;color: white;float: right;">View Slots occupied</button></a>
<button class="btn btn-primary" type="button"><a href="entries.php" style="text-decoration: none;color: white;float: right;">View Total Entries</button></a>
<button class="btn btn-primary" type="button"><a href="exits.php" style="text-decoration: none;color: white;float: right;">View Total Exits</button></a>


</div>
 
<br>
    <br><hr><br>
    <div style="float: left;width: 50%;">
	<iframe width="450" height="250" src="https://www.youtube.com/embed/_LJ_pAALhLU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
	<div style="margin-left: 50%;margin-top:-2%;"> 
<h2 style="color: black;pointer-events: none;
cursor: default;">About BPCL</h2>
<p>On 15th December 1951, the Burmah Shell Group signed an agreement with the Government of India to build a modern refinery at Trombay, Bombay. Soon after, on 3rd November 1952, Burmah Shell Refineries Limited was incorporated as a private limited company under the Indian Companies Act and began working on the marshlands of Trombay.

With relentless hours of work and effort put in by both man and machine, the swamps gave way to towers, tanks of steel and miles of pipeline. Soon, the refinery spread over 454 acres of land at Mahul, went on-stream on 30th January 1955, one year ahead of schedule.

Dr. S. Radakrishnan, the then Vice President of India, declared the 2.2 MMTPA (Million Metric Tonnes Per Annum) Refinery open on 17th March 1955, making it the largest refinery in India then.</p>
	</div></div><br><hr>
<div style="float: left;width: 40%;margin-top:10%; ">
	<h2>BHARAT PETROLEUM LABS</h2><br><p> Pioneering cutting-edge research to find sustainable and environment-friendly fuel sources
</div></p>
	<div class="container" style="width:50%;float: right;">  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="s1.png" alt="Los Angeles" style="width:100%;">
										<h2>23 February 2018</h2><p>
										Refining Petro Chemicals 2018</p>
      </div>

      <div class="item">
        <img src="s2.jpg" alt="Chicago" style="width:100%;">
        <h2>1 September 2017</h2>
        <p>Indian LPG Business Delights from the Synergy Between Regulations and Technology</p>
      </div>
    
      <div class="item">
        <img src="s3.jpg" alt="New york" style="width:100%;">
        <h2>11 JULY 2017</h2>
        <p>Integration of Refining and Petrochem Industry</p>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</body>
</html>

<?php
}
else{
  header("Location:index.php");
}
?>
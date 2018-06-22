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
    <script type="text/javascript">
    function printContent(el){
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
}
  </script>
</head>
<body>
	<br>
	<div style="background-color: blue;padding: 1%;font-size: 30px;color: white;">
	<img src="bpcl.jpg" style="width: 5%">	Vehicle Parking Management System.
		<button  class="btn btn-info" onclick="window.location.href='menu.php'" style="float: right;margin-right: 4%;color: white">Back</button>
	</div>
	<div style="margin-left: 5%;margin-right: 5%;">
		
	<h2> Slots available and allocated </h2>

	<span>
<?php
$sql = "select * from slots where available='Yes';";
$a = mysqli_query($db,$sql);
$sql2 = "select * from slots where available='No';";
$a2 = mysqli_query($db,$sql2);
?>
<h3>Available Slots</h3>
<table class="table">
<?php
if(mysqli_num_rows($a)>0){
while($row = mysqli_fetch_array($a))
{
?>
<tr>
	<td style="font-size: 20px;"><?php echo $row['plotno'] ?></td>
</tr>
<?php
} }

else {
	echo "No slots available";
} ?>
</table>
</span>


<br>
<h3>Allocated Slots</h3>
<table class="table">
	<?php if(mysqli_num_rows($a2)>0){ ?>
<tr>
	<th>Plot Number</th>
	<th>User Name</th>
	<th>Vehicle ID</th>
	<th>Time</th>
</tr>
<?php
while($row1 = mysqli_fetch_array($a2))
	{
?>
<tr>
	<td style="font-size: 20px;"><?php echo $row1['plotno'] ?></td>
	<td style="font-size: 20px;"><?php echo ucfirst($row1['name']) ?></td>
	<td style="font-size: 20px;"><?php echo $row1['carid'] ?></td>
	<td style="font-size: 20px;"><?php echo $row1['time'] ?></td>
</tr>
<?php
	} 
}
else {
	echo "<h3 style=\"font-size: 20px;\">No slots allocated</h3>";
} 
?>
</table>
</div>
</body>
</html>

<?php
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Vehicle Parking System</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
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
	<br>
	<h2> Slots available and allocated </h2>

	<span>
<?php
$sql = "select plotno from slots where available='Yes';";
$a = mysqli_query($db,$sql);
$sql2 = "select plotno from slots where available='No';";
$a2 = mysqli_query($db,$sql2);
?>
<h3>Available Slots</h3>
<table>
<?php
if(mysqli_num_rows($a)>0){
while($row = mysqli_fetch_array($a))
{
?>
<tr>
	<td><?php echo $row['plotno'] ?></td>
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
<table>
<tr>
</tr>
<?php
if(mysqli_num_rows($a2)>0){
while($row1 = mysqli_fetch_array($a2))
	{	
?>
<tr>
	<td><?php echo $row1['plotno'] ?></td>
</tr>
<?php
	} 
}
else {
	echo "No slots allocated";
} 
?>
</table>







</body>
</html>
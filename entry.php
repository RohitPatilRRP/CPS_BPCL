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
</head>
<body>
	
	<div class="limiter">
		<div style="background-color: blue;padding: 1%;font-size: 30px;color: white;">
		<center><img src="bpcl.jpg" style="width: 5%">	Bharat Petroleum.</center>
	</div></div>
	<!-- <form>
		<input type="text" name="Vehicle_Type" placeholder="type">
		<input type="text" name="Date_Time"  placeholder="date time">
<input type="text" name="BPCL_Employee"  placeholder="emp">
<input type="text" name="Car_Details">
	<input type="text" name="Parking_Availabity">
	</form> --><br>

<center>
	<form style="width: 50%;border: 2px solid black;border-radius:5px;padding: 10px " method="post">
  <div class="form-group">

  	<label>Vehicle Type</label>
    <select class="form-control" name="vt">
      <option>2 - Wheeler</option>
      <option>4 - Wheeler</option>

    </select><!-- 
    <label for="exampleFormControlInput1">Vehicle Type</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"> -->
  </div>
     <div class="form-group">
  	 <label>Name</label>
    <input type="text" class="form-control" name="name" placeholder="Name">
  </div>
 <div class="form-group">
    <label>Type</label>
    <select class="form-control" name="ty">
      <option>Visitor</option>
      <option>Employee</option>
    </select>
  </div>
<div class="form-group">
     <label>Card ID</label>
    <input type="text" class="form-control" name="carid" placeholder="Car ID">
  </div>

 <div class="form-group">
  	 <label >Parking Slots Available</label>
       <select class="form-control" name="plotno">
         <?php 
     $abc="select * from slots where available='Yes'";
     $sql = mysqli_query($db,$abc);
     while ($row = mysqli_fetch_array($sql)) {
     ?>
      <option><?php echo $row['plotno']; ?></option>
  <?php 
    }
  ?>
    </select>
  </div> <br>
  <button type="submit" class="btn btn-primary" name="entry">Enter</button>
</form></center>
</body>
</html>

<?php
if(isset($_POST['entry']))
{
  $carid = $_POST['carid'];
  $name = $_POST['name'];
  $plotno = $_POST['plotno'];
  $vt = $_POST['vt'];
  $ty= $_POST['ty'];

  $inst = "update slots set carid='$carid',name='$name',available='No',vehicle_type='$vt',user_type='$ty' where plotno='$plotno'";
  $fire= mysqli_query($db,$inst);
  echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated');
    window.location.href='menu.php';
    </script>");
}

?>
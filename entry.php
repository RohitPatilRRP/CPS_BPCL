<?php
session_start();
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
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Heebo|Indie+Flower" rel="stylesheet">
  <script type="text/javascript">
    function validateForm() {
    var x = document.forms["myForm"]["carid"].value;
    if (x == "") {
        alert("Car ID must be filled out");
        return false;
    }
}
  </script>
</head>
<body>
	
	<div class="limiter">
		<div style="background-color: blue;padding: 1%;font-size: 30px;color: white;">
		<center><img src="bpcl.jpg" style="width: 5%">	Bharat Petroleum.</center>
	</div></div>
<br>

<center>
	<form style="width: 50%;border: 2px solid black;border-radius:5px;padding: 10px " method="post" onsubmit="return validateForm()" name="myForm">
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
    <input type="text" class="form-control" name="name" placeholder="Name" required>
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
  <button type="submit" class="btn btn-primary" name="entry">Print Receipt</button>
</form><br>
 <center>
       <a href="menu.php" style="text-decoration: none;color: white;"><button class="btn btn-primary">Back</button></a>
    </center>
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
  $_SESSION['carid'] = $carid; 
  $_SESSION['name'] = $name;
  $_SESSION['plotno'] = $plotno;
  $_SESSION['vt'] = $vt;
  $_SESSION['ty'] = $ty;
  $_SESSION['time'] = date('Y-m-d H:i:s');


  $insert = "INSERT into entry_records(plotno,carid,name,vehicle_type,user_type,entry_time) VALUES ('$plotno','$carid','$name','$vt','$ty','{$_SESSION['time']}');";
  $abc= mysqli_query($db,$insert);
  echo ("<script LANGUAGE='JavaScript'>
    window.location.href='print.php';
    </script>");
}

?>
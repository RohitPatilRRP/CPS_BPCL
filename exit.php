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
    <center><img src="bpcl.jpg" style="width: 5%">  Bharat Petroleum.</center>
  </div></div>
<br>

<center>
  <form style="width: 50%;border: 2px solid black;border-radius:5px;padding: 10px " method="post">
<div class="form-group">
     <label>Enter Card ID to be removed</label>
    <input type="text" class="form-control" name="carid" placeholder="Car ID">
  </div>
 <br>
  <button type="submit" class="btn btn-primary" name="exit">Remove</button>
</form></center>
</body>
</html>

<?php
if(isset($_POST['exit']))
{
  $carid = $_POST['carid'];
  $inst = "update slots set carid='',name='',available='Yes',vehicle_type='',user_type='' where carid='$carid'";
  $fire= mysqli_query($db,$inst);
  echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Removed');
    window.location.href='menu.php';
    </script>");
}

?>
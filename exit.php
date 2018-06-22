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
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Heebo|Indie+Flower" rel="stylesheet">
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
<center><button class="btn btn-primary" style="margin-top: 5%;"><a href="menu.php" style="text-decoration: none;color: white;">Back</button></a></center>
</body>
</html>


<?php

if(isset($_POST['exit'])){
 $carid = $_POST['carid'];
 $sql="UPDATE slots SET carid='',name='',available='Yes',vehicle_type='',user_type='' WHERE carid='$carid';";
 $check = "SELECT * FROM slots WHERE carid='$carid';";
  $abc = mysqli_query($db,$check);
  $name; $carid ; $vt ; $ty ; $time=date('Y-m-d H:i:s');
  while ($row = mysqli_fetch_array($abc)) {
    $carid = $row['carid'];
    $name = $row['name'];
    $vt = $row['vehicle_type'];
    $ty = $row['user_type'];
  }
  if(mysqli_num_rows($abc)>0){
     $insert = "INSERT into exit_records(carid,name,vehicle_type,user_type,exit_time) VALUES ('$carid','$name','$vt','$ty','$time');";
   }
  if(mysqli_num_rows($abc)>0){

    $res=mysqli_query($db,$sql);
    $res1=mysqli_query($db,$insert);
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Removed');
    </script>");
}
else{
  alert("Entry Not Found");
}
}

?>
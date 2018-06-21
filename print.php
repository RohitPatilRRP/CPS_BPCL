<?php
include('connect.php');
session_start();
$src;
$vt =$_SESSION['ty'];
 if($vt!='Visitor')
        {
          $src='green.png';
        }
  else 
        {
          $src='red.png';
        }
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
    function printContent(el){
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
}
  </script>
</head>
<body style="background-color: #f2f2f2">
    <div class="limiter">
    <div style="background-color: blue;padding: 1%;font-size: 30px;color: white;">
    <center><img src="bpcl.jpg" style="width: 5%">  Bharat Petroleum.</center>
  </div></div>

  <div class="container-login100">
    <div class="wrap-login100" style="width: 50%; margin-top:-5%;" id="div1">
      <center style="margin-top: -5%;"><h2>Welcome Slip</h2></center><br>
      <table style="margin-left: 8%;">
        <tr>
          <td colspan="4" style="">
        Vehicle ID : <?php echo $_SESSION['carid']; ?><br><br>
        Name       : <?php echo ucfirst($_SESSION['name']); ?><br><br>
        Plot Number: <?php echo $_SESSION['plotno']; ?><br><br>
        Vehicle Type: <?php echo $_SESSION['vt']; ?><br><br>
        Guest Type : <?php echo $_SESSION['ty']; ?><br><br>
        Time       : <?php echo $_SESSION['time']; ?><br><br>
      </td><td>&nbsp;</td><td></td><td></td>
      <td rowspan="6" colspan="1" >
        <center><img src="<?php echo $src; ?>" width="200" height="200" style="margin-left: 30%;border: 1px solid black;border-radius: 15px;padding: 8%;"></center>
      </td>
        </tr>
        </table>
    </div>
  </div>
      <center>
      <button class="btn btn-primary" style="margin-top: -13%;"><a href="entry.php" style="text-decoration: none;color: white;">Back</button></a> &nbsp;
      <button class="btn btn-primary" style="margin-top: -13%;" onclick="printContent('div1')">Print</button>
    </center>
</body>
</html>

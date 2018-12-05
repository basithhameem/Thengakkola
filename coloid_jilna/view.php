<html>
	<head>
<title>COLOID ADMIN</title>
<link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
		
<?php
$id = $_GET['id'];
include 'dbConnect.php';
//echo "<body bgcolor=#821cc3><center>";
//session_start();
//$rid=$_SESSION['idforupdate']; 

$result="select * from agentrequest where Id=$id";
$res=mysqli_query($con,$result);
$num_rows=mysqli_num_rows($res);
if($num_rows==0)
echo "<h1 style='color:white;'>no requests</h1>";
else{
	while($row = mysqli_fetch_array($res)){
		echo "<form action='sendMail.php' method='POST'>";
echo "<div class='row form-group'><div class='col col-md-3'><label for='text-input' class=' form-control-label'>NAME</label></div><div class='col-12 col-md-9'><input type='text' class='form-control' value='$row[1]'></div></div>";
echo "<div class='row form-group'><div class='col col-md-3'><label for='text-input' class=' form-control-label'>PHONE NUMBER</label></div><div class='col-12 col-md-9'><input type='text' class='form-control' value='$row[2]'></div></div>";
echo "<div class='row form-group'><div class='col col-md-3'><label for='text-input' class=' form-control-label'>PLACE</label></div><div class='col-12 col-md-9'><input type='text' class='form-control' value='$row[3]'></div></div>";
echo "<div class='row form-group'><div class='col col-md-3'><label for='text-input' class=' form-control-label'>AGE</label></div><div class='col-12 col-md-9'><input type='text' class='form-control'value='$row[4]'></div></div>";
echo "<div class='row form-group'><div class='col col-md-3'><label for='text-input' class=' form-control-label'>EMAIL</label></div><div class='col-12 col-md-9'><input type='text' class='form-control' value='$row[5]' name='tomail'></div></div>";
echo "<div class='row form-group'><div class='col col-md-3'></div><div class='col-12 col-md-9'><input type='hidden' class='form-control' value='$row[0]' name='custId'></div></div>";
echo "<center>";
 echo "<div class='card-footer'>";
                
                
                echo "<button type='submit' class='btn btn-primary btn-sm' id='accept' name='accept' onclick='return send()'><i class='fa fa-dot-circle-o'></i> ACCEPT</button>";
                echo "<button type='reset' class='btn btn-danger btn-sm' id='reject' name='reject'><i class='fa fa-ban'></i> REJECT</button>";
             echo "</div>";
             echo "</center>";
             echo "</form>";
}
	
}

?>

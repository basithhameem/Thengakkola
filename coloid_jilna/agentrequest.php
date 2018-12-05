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
include 'dbConnect.php';
//echo "<body bgcolor=#821cc3><center>";
//session_start();
//$rid=$_SESSION['idforupdate'];

$result="select * from agentrequest";
$res=mysqli_query($con,$result);
$num_rows=mysqli_num_rows($res);
if($num_rows==0)
echo "<h1 style='color:white;'>no requests</h1>";
else{
echo "<table border='1' bgcolor='white' class='table'><tr><td>NAME</td><td>PHONE</td><td>ADDRESS</td><td>AGE</td><td>EMAIL</td><td>ACCEPT OR REJECT</td></tr>";
while($row = mysqli_fetch_array($res)){
echo "<tr><td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "<td><a href='view.php?id=".$row[0]."'>view</a></td></tr>";
}
echo "</table>";
function show($id)
{
	echo "$id";
}
}
?>
</body>
</html>

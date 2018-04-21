 <?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php

$db_host="localhost";
$db_user="root";
$db_password="tiger";
$db_name="milan";
$dbh = mysqli_connect($db_host,$db_user,$db_password,$db_name) or die (" could not connect to database".mysqli_error($dbh));

session_unset();
session_destroy();
$z="update login set voted='no';";
$r=mysqli_query($dbh,$z);
$z1="update candidate set votecount=0;";
$r1=mysqli_query($dbh,$z);


header('location:admin.php');
?>
</body>
</html> 

<?php
session_start();

$db_host="localhost";
$db_user="root";
$db_password="tiger";
$db_name="milan";
$dbh = mysqli_connect($db_host,$db_user,$db_password,$db_name) or die (" could not connect to database".mysqli_error($dbh));
$cand=$_POST['cand'];
$a="DELETE FROM candidate WHERE id='$cand';";
$a2=mysqli_query($dbh,$a);
echo $cand;
header('location:approve.php');
?>

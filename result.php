<?php
session_start();

$db_host="localhost";
$db_user="root";
$db_password="tiger";
$db_name="milan";
$dbh = mysqli_connect($db_host,$db_user,$db_password,$db_name) or die (" could not connect to database".mysqli_error($dbh));



$aa="update login set result=1";
$bb=mysqli_query($dbh,$aa) or die ("error querying the database");

$_SESSION["declare"]=1;
?>

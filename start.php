<?php
	session_start();
	$db_host="localhost";
	$db_user="root";
	$db_pass="tiger";
	$db_name="milan";
	
	$dbh=mysqli_connect($db_host,$db_user,$db_pass,$db_name) or die("Error connecting to Databsase");
	$z="update vote set vote=1;";
	$r=mysqli_query($dbh,$z);
	header('location:admin.php');
	
?>

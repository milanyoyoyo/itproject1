<?php
session_start();

$db_host="localhost";
$db_user="root";
$db_password="tiger";
$db_name="milan";
$dbh = mysqli_connect($db_host,$db_user,$db_password,$db_name) or die (" could not connect to database".mysqli_error($dbh));




$username=$_POST['name'];
$id=$_POST['id'];
$section=$_POST['section'];
$cgpa=$_POST['cgpa'];
$query="insert into candidate values ('$id','$username','$section','0','$cgpa','0');";
	$result=mysqli_query($dbh,$query) or die("Nope");
	
echo "register complete";


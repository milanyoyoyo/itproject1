<?php
session_start();

$db_host="localhost";
$db_user="root";
$db_password="tiger";
$db_name="milan";
$dbh = mysqli_connect($db_host,$db_user,$db_password,$db_name) or die (" could not connect to database".mysqli_error($dbh));




$username=$_POST['username'];
	$password=$_POST['password'];
	$query="select * from login where id='$username';";
	$result=mysqli_query($dbh,$query) or die("Nope");
	$row=mysqli_fetch_array($result);
	$_SESSION['section']=$row['section'];

	if($password==$row['password'])
{
		if($row['type']==1)
		{
		$_SESSION['name']=$username;
		header('location:admin.php');
		}
	else {
		if($row['voted']=="no")
		{

		$_SESSION['name']=$username;
		header('location:Election.php');
		}
		else
		{
		$_SESSION['name']=$username;
		header('location:voted.php');
		}		
	}

}
	else
		header('location:loginssession.html');

?>







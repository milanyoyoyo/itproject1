<?php
session_start();

$db_host="localhost";
$db_user="root";
$db_password="tiger";
$db_name="milan";
$dbh = mysqli_connect($db_host,$db_user,$db_password,$db_name) or die (" could not connect to database".mysqli_error($dbh));

$z=$_SESSION["section"];
echo $z;
$x="select * from candidate where section='$z' order by votecount desc";

$c=mysqli_query($dbh,$x) or die ("error querying the database");
$row10=mysqli_fetch_assoc($c);
echo "   ";
echo $row10['name'];
echo " is the winner";
?>

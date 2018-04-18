<?php
session_start();
 if (empty($_SESSION['name']))
{
header('Location:loginssession3.html');
}
if (empty($_SESSION["declare"]))
{
header('Location:result1.html');
}
$db_host="localhost";
$db_user="root";
$db_password="tiger";
$db_name="milan";
$dbh = mysqli_connect($db_host,$db_user,$db_password,$db_name) or die (" could not connect to database".mysqli_error($dbh));

session_start();
$sec=$_SESSION['sec'];
echo "Section "."$sec"."<br />";
$q="select * from candidate where section='$sec'";
$res=mysqli_query($dbh,$q) or die("error in query");
echo '<form  action="submit.php" id="myform" >';
while($row=mysqli_fetch_array($res))
{
echo '<input type="radio" id="r1" name="vote" value="'.$row['name'].'">'.$row['name'].'';
}
echo '</form>';
?>

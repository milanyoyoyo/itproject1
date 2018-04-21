<?php
session_start();
 if (empty($_SESSION['name']))
{
header('Location:loginssession2.html');
}
if (isset($_SESSION["declare"]))
{
header('Location:result1.php');
}

$username=$_SESSION['name'];

$db_host="localhost";
$db_user="root";
$db_password="tiger";
$db_name="milan";
$dbh = mysqli_connect($db_host,$db_user,$db_password,$db_name) or die (" could not connect to database".mysqli_error($dbh));


$vote=$_POST['candidate'];

$quer="select votecount from candidate where name='$vote'";
$resul=mysqli_query($dbh,$quer) or die ("error querying the database1");
$ro=mysqli_fetch_assoc($resul);
$c=$ro['votecount'];
$c=$c+1;

$q="update candidate set votecount=$c where name='$vote'";
$r=mysqli_query($dbh,$q) or die ("error querying the database2");
$qq="update login set voted='yes' where id='$username'";
$rq=mysqli_query($dbh,$qq) or die ("error querying the database3");
echo 'your vote is recorded  ';

?>
<form action="logout.php" method="POST">
<input type="submit" value="logout">
</form>

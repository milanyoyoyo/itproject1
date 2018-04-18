<?php
session_start();

$db_host="localhost";
$db_user="root";
$db_password="tiger";
$db_name="milan";
$dbh = mysqli_connect($db_host,$db_user,$db_password,$db_name) or die (" could not connect to database".mysqli_error($dbh));


$username=$_POST['username'];
$pass=$_POST['password'];



$query="select password from login where id='$username'";
$result=mysqli_query($dbh,$query) or die ("error querying the database");
$row=mysqli_fetch_assoc($result);
if($row['password']!=$pass)
{
	header('Location:passwordgone.html');
}
echo $_SESSION['declare'];
$a="select name from login where type=1";
$b=mysqli_query($dbh,$a) or die ("error querying the database");
$d=mysqli_fetch_assoc($b);
if(isset($d)){
header ('location:admin.php');
}

if (empty($_SESSION['declare']))
{
header('Location:result1.php');
}



$_SESSION['name']=$username;
$query1="select voted from login where id='$username'";
$result1=mysqli_query($dbh,$query1) or die ("error querying the database");
$row1=mysqli_fetch_assoc($result1);
if($row1['voted']!='no')
{
	header('Location:voted.php');
}

echo 'checking if voted ';
echo $row1['voted'];
$query2="select section from login where id='$username'";
$result2=mysqli_query($dbh,$query2) or die ("error querying the database");
$row2=mysqli_fetch_assoc($result2);
echo 'checking for section ';
echo $row2['section'];
$h=$row2['section'];
$_SESSION["section"]=$h;
$query3="select name from candidate where section='$h'";
$result3=mysqli_query($dbh,$query3) or die ("error querying the database");

 while($row3=mysqli_fetch_array($result3)){ ?>
    <form id="myform" action="submit.php" method="post">
    <input type="radio" name="candidate" id="name1" value="<?php echo $row3['name']?>"><?php echo $row3['name'] ?><br /> <?php } ?>
    <input type="submit" value="submit"/>
    </form>


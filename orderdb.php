<html>
<body>

<?php
    session_start();
$dbc = mysqli_connect('localhost', 'root', '', 'laundry') or die('Error connecting to MySQL server.');
$date= $_POST['date'];
$time= $_POST['time'];
    $username=$_SESSION['username'];
$sta=1;
$username='milan';
$query ="insert into orders(username,pdate,ptime) values ('$username','$date','$time');";


if(mysqli_query($dbc, $query))
    header('location:Porder.php?err=1');
else
    header('location:Porder.php?err=2');
echo "Thanks for visiting. We are updating our website, keep visiting.";
?>

</body>
</html>
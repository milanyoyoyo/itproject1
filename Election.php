<html>
<head>
<?php
	session_start();
	$db_host="localhost";
	$db_user="root";
	$db_pass="tiger";
	$db_name="milan";
	
	$dbh=mysqli_connect($db_host,$db_user,$db_pass,$db_name) or die("Error connecting to Databsase");
	$section=$_SESSION['section'];
	$a="select regis from vote;";
	$b=mysqli_query($dbh,$a)or('nope');
	$o=mysqli_fetch_array($b);
	if($o['regis']==1){
	header('location:loginlater.php');
	}
	$aa="select resultset from result;";
	$ba=mysqli_query($dbh,$aa)or('nope');
	$oa=mysqli_fetch_array($ba);
	if($oa['resultset']==1){
	header('location:resultannounce.php');
	}
	$query="select id,name from candidate where section=$section;";
	$result=mysqli_query($dbh,$query);
?>
<style>
	body{
		text-align:center;
	}
</style>
</head>
<body>	elect your candidate
	<?php while($row=mysqli_fetch_array($result)){ ?>
	
	<form id="myform" action="submit.php" method="post">
	
	<input type="radio" name="candidate" id="name1" value="<?php echo $row['name']?>"><?php echo $row['name'] ?><br /> <?php } ?>
	<input type="submit" value="submit"/>
	</form>

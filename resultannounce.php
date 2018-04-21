<html>
	<head>
		<?php
	session_start();
	$db_host="localhost";
	$db_user="root";
	$db_pass="tiger";
	$db_name="milan";
	
	$dbh=mysqli_connect($db_host,$db_user,$db_pass,$db_name) or die("Error connecting to Databsase");
	

	$dbh=mysqli_connect($db_host,$db_user,$db_pass,$db_name) or die("Error connecting to Databsase");
	
	$query="select count(id) from candidate;";
	$query2="select * from candidate where section=2 order by votecount desc;";
	$result2=mysqli_query($dbh,$query2);	
	$query3="select * from candidate where section=3 order by votecount desc;";
	$result3=mysqli_query($dbh,$query3);	
?>
		
?>
	<style>
		.table{
			float:left;
			margin-right:10px;
		}
		.tab{
			//float: left;
			margin-left:32%;
			width:100%;
		}
	</style>
	</head>
	<body>
	

		<center><h2>Welcome, </h2></center>
<div class="tab">


		<table class="table" border=1px rules="all">
		<tr>
				<th colspan="2">Section 2</th>
		</tr>
		<tr>
			<th>Candidate</th>
			<th>Vote</th>
		</tr>
		<?php while($row2=mysqli_fetch_array($result2)){ ?>
		<tr>
			<td><?php echo $row2['name']; ?></td>
			<td><?php echo $row2['votecount']; ?></td>
		</tr>
			<?php } ?>
		</table>
		<table border=1px rules="all">
		<tr>
				<th colspan="2">Section 3</th>
		</tr>
		<tr>
			<th>Candidate</th>
			<th>Vote</th>
		</tr>
		<?php while($row3=mysqli_fetch_array($result3)){ ?>
		<tr>
			<td><?php echo $row3['name']; ?></td>
			<td><?php echo $row3['votecount']; ?></td>
		</tr>
			<?php } ?>
		</table>
		
</div>
<center>
 <?php
	$sec=$_SESSION['section'];
	$query2="select name from candidate where section=$sec order by votecount desc;";
	$result2=mysqli_query($dbh,$query2);
	echo "the winner is ".$result2['name'];
	
?>
</center>

	</body>
</html>		

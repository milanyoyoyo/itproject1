<html>
<head>
<body>
<center><h2>Welcome, Admin</h2></center>
<div class="tab">
<?php
session_start();

$db_host="localhost";
$db_user="root";
$db_password="tiger";
$db_name="milan";
$dbh = mysqli_connect($db_host,$db_user,$db_password,$db_name) or die (" could not connect to database".mysqli_error($dbh));



	$query2="select * from candidate where section=2 ;";
	$result2=mysqli_query($dbh,$query2);	
	$query3="select * from candidate where section=3 ;";
	$result3=mysqli_query($dbh,$query3);
?>	
<table class="table" border=1px rules="all">
		<tr>
				<th colspan="3">Section 2</th>
		</tr>
		<tr>
			<th>Candidate</th>
			<th>CGPA</th>
			<th>Disapprove</th>
		</tr>
		<?php while($row2=mysqli_fetch_array($result2)){ ?>
		<tr>
			<td><?php echo $row2['name']; ?></td>
			<td><?php echo $row2['cgpa']; ?></td>
			<td><center><input type="radio" name="cand" value="<?php echo $row2['id'];  ?>" form="dis"/></center>
			</td>
		</tr>
			<?php } ?>
		</table>
		<table border=1px rules="all">
		<tr>
				<th colspan="3">Section 3</th>
		</tr>
		<tr>
			<th>Candidate</th>
			<th>CGPA</th>
			<th>Disapprove</th>
		</tr>
		<?php while($row3=mysqli_fetch_array($result3)){ ?>
		<tr>
			<td><?php echo $row3['name']; ?></td>
			<td><?php echo $row3['cgpa']; ?></td>
			<td><center><input type="radio" name="cand" value="<?php echo $row3['id'];  ?>" form="dis"/></center>
			</td>
		</tr>
			<?php } ?>
		</table>
		
</div>
<center>
<form action="dis.php" id="dis" method="POST">
	<input type="submit" value="Remove Candidate">
</form>
<form action="start.php"  method="POST">
	<input type="submit" value="start voting">
</form>
</center>

	</body>
</html> 

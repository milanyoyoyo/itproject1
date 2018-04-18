<?php
session_start();
 if (empty($_SESSION['name']))
{
header('Location:loginssession.html');
}
if (isset($_SESSION["declare"]))
{
header('Location:result1.php');
}
?>
<html>
<body>
your vote is recorded
</body>
</html>

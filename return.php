<?php
require("dbconnect.php");

$msgID=(int)$_GET['id'];
if ($msgID) {
	$sql = "update todo set status =0 where id=$msgID; ";
	mysqli_query($conn,$sql) or die("MySQL query error"); //執行SQL
}
$msg = "Message change";
echo "Message:$msgID completed.";

?>

<html>
<a href="boss.php">back</a> 
</html>

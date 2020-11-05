<?php
header('Location: listtodo.php');
require("dbconnect.php");
$title=mysqli_real_escape_string($conn,$_POST['title']);
$content=mysqli_real_escape_string($conn,$_POST['content']);
$assignee=mysqli_real_escape_string($conn,$_POST['assignee']);
$importance=mysqli_real_escape_string($conn,$_POST['importance']);
$status=mysqli_real_escape_string($conn,$_POST['status']);
$id=(int)$_POST['id'];
if ($title) { //if title is not empty
	$sql = "update todo set title='$title',content='$content',assignee='$assignee',importance='$importance',status='$status' where id='$id';";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
	$msg = "Message change";
} else {
	echo "Message title cannot be empty";
}
header("Location: boss.php?m=$msg");
?>
<a href="boss.php">back</a>

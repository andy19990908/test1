<?php
require("dbconnect.php");
$title=mysqli_real_escape_string($conn,$_POST['title']);
$content=mysqli_real_escape_string($conn,$_POST['content']);
$assignee=mysqli_real_escape_string($conn,$_POST['assignee']);
$importance=mysqli_real_escape_string($conn,$_POST['importance']);
$status=mysqli_real_escape_string($conn,$_POST['status']);
if ($title) { //if title is not empty
	$sql = "insert into todo (title, content,assignee,importance, status) values ('$title', '$content','$assignee','$importance','$status');";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
	echo "Message added";
} else {
	echo "Message title cannot be empty";
}

?>
<a href="boss.php">back</a>
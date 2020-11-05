<?php
session_start();
require("dbconnect.php");
if (isset($_GET['m'])){
    $text = $_GET['m'];
    $msg="<font color='red'>$text</font>";
}else{
    $msg="<font color='blue'>good morning</font>";
}
$sql = "select * from todo where status= 0 or 1 Group by status,id;";
$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>

<p>老闆交辦事項 !! </p>
<hr />
<?php echo $msg?> <hr>
<table width="200" border="1">
  <tr>
    <td>id</td>
    <td>title</td>
    <td>content</td>
    <td>impotance</td>
    <td>assignee</td>
    <td>status</td>
  </tr>
<?php
while (	$rs=mysqli_fetch_assoc($result)) {
	echo "<tr><td>" . $rs['id'] . "</td>";
	echo "<td>{$rs['title']}</td>";
	echo "<td>" , $rs['content'], "</td>";
    echo "<td>" , $rs['assignee'], "</td>";
    echo "<td>" , $rs['importance'] , "</td>";
    echo "<td>" . $rs['status'] , "</td>";
    echo "<td>" , "<a href='finish.php?id={$rs['id']}'>finish</a>". "</td>";
    echo "<td>" , "<a href='changemessageForm.php?id={$rs['id']}'>Update</a>". "</td>";
    echo "<td>" , "<a href='return.php?id={$rs['id']}'>return</a>". "</td>";
}
?>
</table>
<a href="addMessageForm.php">Add Message</a> 
<a href="deleteMessageForm.php">Delete Message</a> 
<a href="listtodo.php">back</a>
</body>
</html>
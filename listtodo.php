<?php
session_start();
require("dbconnect.php");
if (isset($_GET['m'])){
    $text = $_GET['m'];
    $msg="<font color='red'>$text</font>";
}else{
    $msg="<font color='blue'>good morning</font>";
}
$sql = "select * from todo where status= 1 Group by content,importance;";
$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>

<p>主頁面!! </p>
<hr />
<?php echo $msg?> <hr>
<table width="200" border="1">
  <tr>
    <td>id</td>
    <td>title</td>
    <td>content</td>
    <td>assignee</td>
    <td>importance</td>
    <td>status</td>
  </tr>
<?php
$fin=0;
while (	$rs=mysqli_fetch_assoc($result)) {
	echo "<tr><td>" . $rs['id'] . "</td>";
	echo "<td>{$rs['title']}</td>";
	echo "<td>" , $rs['content'], "</td>";
    echo "<td>" , $rs['assignee'], "</td>";
    echo "<td>" , $rs['importance'] , "</td>";
    echo "<td>" . $rs['status'] , "</td>";
    $fin+=1;
}
?>
</table>
<a href="addMessageForm.php">新增待辦工作</a> 
<?php echo "已完成 $fin 項"?>
<a href="todorpt.php">員工頁面</a> 
<a href="boss.php">老闆頁面</a> 
</body>
</html>

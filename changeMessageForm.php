<?php
session_start();
require("dbconnect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>
<body>
<h1>Change Message</h1>
<form method="post" action="changeMessage.php">
      id :<input name="id" type="int" id="id" value = <?php echo (int)$_GET['id']?>> <br>
      
      Message Title: <input name="title" type="text" id="title" /> <br>

      content : <input name="content" type="text" id="content" /> <br>
	    
      assignee : <input name="assignee" type="text" id="assignee" /> <br>
      
      importance : <input type="checkbox" name="importance" value="重要">urgency<input type="checkbox" name="importance" value="一般">general<input type="checkbox" name="importance" value="重要">important <br>
            
      status : <input name="status" type="text" id="status" /> <br>
      <input type="submit" name="Submit" value="送出" />
	</form>
  </tr>
</table>
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<link href="main.css" type="text/css" rel="stylesheet"> 
<title></title> 
<script src="ajax.js" type="text/javascript"></script> 
</head> 
   
<body> 
<div id="thread"> 
<?php
include("conn.php"); 
$sql = "select * from `bbs_post` where `threadid` ='1' order by id asc"; 
$query =mysql_query($sql); 
while($row = mysql_fetch_array($query)){  
?> 
 <div class="post" id="post<?php echo $row['id'];?>"> 
    <div class="post_title"><?php echo $row['title'];?> [<?php echo $row['username'];?>]</div> 
    <div class="post_content"><pre><?php echo $row['content'];?></pre></div> 
   </div> 
<?php
} 
?> 
</div> 
   
<table class="reply"> 
<tr> 
 <td colspan="2" class="title">留言板<input type="hidden" name="threadid" id="threadid" value="1"></td> 
</tr> 
<tr> 
 <td>姓名：</td> 
 <td><input type="text" name="username" id="username"></td> 
</tr> 
<tr> 
 <td>標題：</td> 
 <td><input type="text" name="post_title" id="post_title"></td> 
</tr> 
<tr> 
 <td>內容：</td> 
 <td><textarea name="post_content" id="post_content"></textarea></td> 
</tr> 
<tr> 
 <td colspan="2"><input type="button" onclick="submitPost()" value="提交"></td> 
</tr> 
</table> 
</body> 
</html>
<?php 
include("conn.php"); 
$title = $_POST["title"]; //獲取title 
$content = $_POST["content"]; //獲取content 
$username = $_POST["username"]; //獲取username 
$threadid = $_POST["threadid"]; //獲取threadid    
$sql="INSERT INTO `bbs_post`(`title`, `content`, `username`, `threadid`) VALUES ('".$title."','".$content."','".$username."','".$threadid."')"; 
mysql_query($sql); 
 //傳回最後一次使用 INSERT 指令的 ID 
mysql_insert_id(); 
echo $content;
?>

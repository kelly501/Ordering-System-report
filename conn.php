<?php 
$conn = @mysql_connect("localhost","abcabc","123") or die ("MySql連接錯誤"); 
mysql_select_db("demo",$conn); 
mysql_query("set names 'utf8'"); 
?>
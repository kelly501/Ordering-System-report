<?php
$user=$_GET["user"];
mysql_connect("localhost","abcabc","123");
mysql_select_db("ncue");
mysql_query("set names utf8");
$sql="update members set reply='Y' where user='".$user."'";
mysql_query($sql);
setcookie("user",$user);

$dbhost = 'localhost';
$dbuser = 'abcabc';
$dbpass = '123';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully<br />';
$sql = "CREATE TABLE $user( ".
       "item VARCHAR(15) NOT NULL, ".
       "number INT(10) NOT NULL, ".
       "price INT(80) NOT NULL, ".
       "PRIMARY KEY ( item )); ";
mysql_select_db( 'ncue' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not create table: ' . mysql_error());
}
echo "Table created successfully\n";
mysql_close($conn);

header('Location:http://localhost:8080/project/moban2377/login2.php');
?>


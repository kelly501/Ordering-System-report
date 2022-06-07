<head>
<meta charset="UTF-8">
</head>

<?php
if (isset($_GET["p"])){
    $p = $_GET["p"];
} else {
    $p = 1;
}
mysql_connect('localhost','abc','123');
mysql_select_db('ncue');
mysql_query("SET NAMES UTF8");
$sql="select * from menu"; 
/*$sql = "SELECT a1.item, a1.number, COUNT(a2.number) number_Rank 
FROM menu a1, menu a2 
WHERE a1.number <= a2.number OR (a1.number=a2.number AND a1.item = a2.item) 
GROUP BY a1.item, a1.number 
ORDER BY a1.number DESC, a1.item DESC"/*limit 10 */;

$result= mysql_query($sql);
$rows=mysql_num_rows($result);
mysql_free_result($result);
for ($i=1; $i<=ceil($rows/10); $i++){
	echo "<a href='Rank.php?p=".$i."'>".$i."</a>&nbsp;";
}
echo "<hr>";

$start=($p-1)*10;
$sql = "SELECT a1.item, a1.number, COUNT(a2.number) number_Rank 
FROM menu a1, menu a2 
WHERE a1.number <= a2.number OR (a1.number=a2.number AND a1.item = a2.item) 
GROUP BY a1.item, a1.number 
ORDER BY a1.number DESC, a1.item DESC 
limit ".$start.",10";
$result= mysql_query($sql);


echo'<table width="300" border="1">
　<tr>
　<td>item</td>
　<td>number</td>
　<td>Rank</td>
  </tr>';
$i=1;
while ($row = mysql_fetch_row($result)){
echo'<tr>';
echo'<td>';
echo $row["0"];
echo'</td>';
echo'<td>';
echo $row["1"];
echo'</td>';
echo'<td>';
echo 'NO.'.$i.'"';
$i++;
echo'</td>';
echo'</tr>';
};

echo'</table>';
mysql_close();

echo'</div>';
echo'<div>';

?>
<html>
<head>
<meta http-equiv="Content-Type" content="html; charset=utf-8">
</head>
<body>
<?php
echo "<img src='jp1.php'>";
echo "</a>";
?>
</body>
</html>

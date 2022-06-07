<head>
<meta charset="UTF-8">
<tr>您購買的商品</tr>
</head>
<?php


mysql_connect('localhost', 'abc', '12345');
mysql_select_db('ncue');
mysql_query("SET NAMES UTF8");
$sql = "SELECT * FROM `shopping`";
$result = mysql_query($sql);

echo "<form method='POST' action='sub-202.php'>";
echo "<TABLE>";

for($i=0;$i<mysql_num_rows($result);$i++){
	$row = mysql_fetch_row($result);
    echo "<TR>";
    echo "<td>$row[0]&nbsp;&nbsp;&nbsp;</td>";
    echo "<td>$row[1]&nbsp;&nbsp;&nbsp;</td>";
    echo "<td>$row[2]&nbsp;&nbsp;&nbsp;</td>";
    echo "<td><input type='hidden' name='in[$i]' value='",$row[0] ,"'></td>";
    echo "<td><input type='hidden' name='nb[$i]' value='",$row[1] ,"'></td>";
    echo "<td><input type='checkbox' name='check[$i]' value='check'></td>";
    echo "</TR>";
    
};
echo "<td><input type='submit' name='del' value='刪除品項'></td>";
echo "</TABLE>";
echo "</form>";
mysql_free_result($result);
mysql_close();
?>
<br><input type="button" value="回主畫面" onclick="location.href='text02.php'"></br>

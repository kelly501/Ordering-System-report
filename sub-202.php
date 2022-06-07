<?php
mysql_connect("localhost","abc","12345") or die("could not connect:".mysql_error());
mysql_select_db("ncue");
mysql_query("set names utf8");


$del=$_POST["del"];
if ($del=='刪除品項'){
	if(isset($_POST["check"])){
	$check=$_POST["check"];
	$item=$_POST["in"];
	$num=$_POST["nb"];
	$count=count($item);
	for($i=0;$i<$count;$i++){
		if(isset($check[$i])){
		if($check[$i]=='check'){
			$sql[$i]="DELETE FROM `shopping` WHERE `item` = '".$item[$i]."'";

			$sql_1="SELECT `number` FROM `menu` WHERE `item`='".$item[$i]."'";
        	$result_1=mysql_query($sql_1);
        	$result_1=mysql_fetch_array($result_1);
        	echo $result_1['number'];
       		$a=$result_1['number']-$num[$i];
        	echo $a;
        	$sql_2="UPDATE `menu` SET `number`='".$a."' WHERE `item`='".$item[$i]."'";
        	mysql_query($sql_2);

		}else{
			$sql[$i]="";
		};
		mysql_query($sql[$i]);
	};
	};
};	 
};
mysql_close();

?>
<head>
<meta charset="UTF-8">
<tr>刪除成功</tr>
</head>
<br><input type="button" value="回主畫面" onclick="location.href='text02.php?p=1'"></br>
<br><input type="button" value="查看購買物品" onclick="location.href='sub-102.php?p=1'"></br>
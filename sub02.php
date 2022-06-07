<head>
<meta charset="UTF-8">
</head>
<?php
mysql_connect("localhost","abc","12345") or die("could not connect:".mysql_error());
mysql_select_db("ncue");
mysql_query("set names utf8");

$do=$_POST["do"];
  $in=$_POST["in01"];
  $nb=$_POST["nb01"];
  $ip=$_POST["ip01"];
  $count=$_POST['count'];
  $y=0; //商品選擇成功個數
  $n=0; //商品重複個數
if ($do=='選購'){
  for($i=0;$i<$count;$i++){
  	$sql[$i]="SELECT * FROM `shopping` WHERE `item`='".$in[$i]."'";
  	$result=mysql_query($sql[$i]);
  	$row=mysql_num_rows($result);
  	if($row==0 && $nb[$i]!=0){
  			$sql[$i]="INSERT INTO `shopping`(`item`, `number`, `price`) VALUES ('".$in[$i]."','".$nb[$i]."','".$ip[$i]."')";
  			$y++;
        $sql_1="SELECT `number` FROM `menu` WHERE `item`='".$in[$i]."'";
        $result_1=mysql_query($sql_1);
        $result_1=mysql_fetch_array($result_1);
        echo $result_1['number'];
        $a=$result_1['number']+$nb[$i];
        echo $a;
        $sql_2="UPDATE `menu` SET `number`='".$a."' WHERE `item`='".$in[$i]."'";
        mysql_query($sql_2);
	}elseif($nb[$i]!=0){
		$sql[$i]="";
		$n++;
	};
	mysql_query($sql[$i]);
  }; 

};
echo "<tr>加入購物車個數:'".$y."'</tr>";
echo "<br>";
echo "<tr>商品重複個數:'".$n."'</tr>";
echo "<br>";
mysql_close();
?>
<br><input type="button" value="繼續購買" onclick="location.href='text02.php?p=1'"></br>
<br><input type="button" value="查看購買物品" onclick="location.href='sub-102.php?p=1'"></br>

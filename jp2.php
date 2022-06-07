<?php // content="text/plain; charset=utf-8"
require_once ('jpgraph-4.2.6/src/jpgraph.php');
require_once ('jpgraph-4.2.6/src/jpgraph_bar.php');

mysql_connect('localhost','abcabc','123');
mysql_select_db('ncue');
mysql_query("SET NAMES UTF8");
$sql = "SELECT a1.item, a1.number, COUNT(a2.number) number_Rank 
FROM menu a1, menu a2 
WHERE a1.number <= a2.number OR (a1.number=a2.number AND a1.item = a2.item) 
GROUP BY a1.item, a1.number 
ORDER BY a1.number DESC, a1.item DESC
LIMIT 10,10";
$result= mysql_query($sql);
$a=0;
while ($row=mysql_fetch_row($result)){
	
	$datax[$a]=$row[0];
	$datay[$a]=$row[1];
	$a++;
}
mysql_free_result($result);
mysql_close();
	

// Create the graph. These two calls are always required
$graph = new Graph(500,330);
$graph->clearTheme();	
$graph->SetScale("textlin");

// Add a drop shadow
$graph->SetShadow();

// Adjust the margin a bit to make more room for titles
$graph->img->SetMargin(40,30,20,40);

// Create a bar pot
$bplot = new BarPlot($datay);

// Adjust fill color
$bplot->SetFillColor('pink');

// Setup values
$bplot->value->Show();
$bplot->value->SetFormat('%d');
$bplot->value->SetFont(FF_FONT1,FS_BOLD);

// Center the values in the bar
$bplot->SetValuePos('center');

// Make the bar a little bit wider
$bplot->SetWidth(0.7);

$graph->Add($bplot);

// Setup the titles
$graph->title->Set("popularity");
$graph->xaxis->title->Set("");
$graph->yaxis->title->Set("numbers");

$graph->title->SetFont(FF_FONT1,FS_BOLD);
$graph->yaxis->title->SetFont(FF_FONT1,FS_BOLD);
$graph->xaxis->title->SetFont(FF_FONT1,FS_BOLD);

// Display the graph
$graph->Stroke();
?>

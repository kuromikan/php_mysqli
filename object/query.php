<?php
header("Content-Type:text/html; charset=utf-8");
include("mysql.inc.php");
$sql="select * from `member`";
$result=$mysqli->query($sql);
while ($row = $result->fetch_row()) 
{
	print_r($row);
	echo "<br>";
}
?>
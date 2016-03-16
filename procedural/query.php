<?php
header("Content-Type:text/html; charset=utf-8");
include("mysql.inc.php");
$sql="select * from `member`";
$result=mysqli_query($link, $sql);
while ($row = mysqli_fetch_row($result)) 
{
	print_r($row);
	echo "<br>";
}
?>
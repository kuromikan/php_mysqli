<?php
header("Content-Type:text/html; charset=utf-8");
$mysqli = new mysqli("localhost", "root", "1234", "sample_db");
if ($mysqli->connect_errno) {
    echo $mysqli->connect_error;
    exit();
}
$mysqli->set_charset("utf8");
?>
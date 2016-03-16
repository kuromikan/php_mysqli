<?php
header("Content-Type:text/html; charset=utf-8");
$link = mysqli_connect("localhost", "root", "1234", "sample_db");
if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
    exit();
}
mysqli_set_charset($link, "utf8");
?>
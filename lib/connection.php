<?php
$server_username = "cucch_16659359";
$server_password = "Holas2heo1995";
$server_host = "sql313.cuccfree.com";
$database = "cucch_16659359_blogspot";

$conn = mysqli_connect($server_host,$server_username,$server_password,$database) or die("không thể kết nối tới database");
mysqli_query($conn,"SET NAMES 'UTF8'");
?>
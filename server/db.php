<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "password";
$mysql_database = "WebSecurityAttacks";
$prefix = "";
$link = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database) or die("Could not connect database");
?>
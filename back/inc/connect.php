<?php

$hostname = "localhost";
$username = "root";
$pwd = "";
$db = "volleyball";

$dbcon = mysqli_connect($hostname, $username, $pwd, $db);

if(mysqli_connect_errno()){
    echo "Failed to connect to MYSQL: ".mysqli_connect_error();
    exit;
}

mysqli_set_charset($dbcon,"utf8");

?>
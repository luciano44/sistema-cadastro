<?php

$serverName = "localhost";
$dbusername = "root";
$dbpasword = "";
$dbname = "phpproject01";

$conn = mysqli_connect($serverName, $dbusername, $dbpasword, $dbname);

if (!$conn){
    die('Connection Error: '.mysqli_connect_error());
}
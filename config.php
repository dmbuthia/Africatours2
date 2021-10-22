<?php

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "bossplaya";
$port = "3308"; 
 
/* Attempt to connect to MySQL database */
$mysqli = new mysqli($servername, $username, $password,$dbname,$port);
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>
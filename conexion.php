<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "noticpelic";

// Crear connection
$conn = @mysqli_connect($servername, $username, $password, $dbname);
return $conn;
// revisar connection

/*
$servername = "fdb23.runhosting.com";
$username = "2877282_electronicax";
$password = "clubtvs2018";
$dbname = "2877282_electronicax";
$port ="3306";
// Crear connection
$conn = @mysqli_connect($servername, $username, $password, $dbname,$port);
return $conn;
*/
?>

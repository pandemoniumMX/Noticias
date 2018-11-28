<?php
include 'fuctions.php';
$clave=$_SESSION['clave'];
$clave=$_SESSION['nombre'];
$clave=$_SESSION['tipo'];
session_start();

session_destroy();


header("location: index.php");

?>
<?php

if (!isset($_SESSION)) {
  session_start();
}

$hostname_con = "p:localhost";
$database_con = "ticketsys";
$username_con = "root";
$password_con = "root";
$con = mysqli_connect($hostname_con, $username_con, $password_con, $database_con);
mysqli_set_charset($con, 'utf8');

if (is_file("inc/funciones.php")) 
include("inc/funciones.php"); 
else
{
	include("../inc/funciones.php");
}
?>
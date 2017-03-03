<?php

$host = "mysql.hostinger.in";
$userName = "u685478072_root";
$password = "anshul@13158";
$database = "u685478072_cot"; 

global $conn;
$conn = new mysqli($host, $userName, $password, $database);

if(!$conn)  {
	die("Couldn't connect to the database.Please come back again while we are fixing the problem".mysqli_error() ) ;
}	




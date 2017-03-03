<?php

$host = "mysql.hostinger.in";
$userName = "u564194367_ans";
$password = "anshul224437";
$database = "u564194367_cot"; 

global $conn;
$conn = new mysqli($host, $userName, $password, $database);

if(!$conn)  {
	die("Couldn't connect to the database.Please come back again while we are fixing the problem".mysqli_error() ) ;
}	




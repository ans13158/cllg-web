<?php

global $department;
global $rows;
//write this code in faculty.php. Dont try to be oversmart.
$error = "" ;
$success = ""; 
function getDepartments()  {
	require_once "connection.php";

	$query = "SELECT * FROM departments";
	$result = $conn->query("SELECT * FROM departments");
	if(!$result) {
		die("Sorry! We are facing some technical issue.Please come back again". $conn->error);
	}
	else  {
			
		$rows = mysqli_num_rows($result);
		if(!$rows)  {
			die("error".$conn->error);
		}
		
		$department = mysqli_fetch_array($result);
		return $department;
	}
	
}
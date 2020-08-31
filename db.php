<?php 
	$server = "localhost";
	$user = "root";
	$db = "ziko";
	$con = mysqli_connect($server,$user,"");
	if($con->connect_error){
	die("Connection Failed: ".$con->connect_error);
	}
	mysqli_select_db($con,$db);
?>
<?php 
	$dbhost = "localhost";
	$user = "root";
	$pass = "";
	$dbname="sms";
	//create connection
	$conn = mysqli_connect($dbhost,$user,$pass,$dbname);
	//check connection
	if (!$conn){
		die("Connection not established:".mysqli_connect_error());
	} 

	?>
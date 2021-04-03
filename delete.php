<?php 
	require_once('includes/dbconfig.php');

	$id = $_REQUEST['id'];
	$query = "DELETE FROM `adduser` WHERE id='$id'";
	$result = mysqli_query($conn,$query) or die(mysqli_error($conn));
	header('location:edit.php?success');
 ?>
<?php 
	require_once('includes/dbconfig.php');

	if (!empty($_REQUEST['username']) &&($_REQUEST['email']) &&($_REQUEST['subject']) &&($_REQUEST['password'])) {
		
		$username = stripcslashes($_REQUEST['username']);//remove backslashes
		$username = mysqli_real_escape_string($conn,$username);//removes special characters from a string
		$email = stripcslashes($_REQUEST['email']);//remove backslashes
		$email = mysqli_real_escape_string($conn,$email);

		$phoneExt = stripcslashes($_REQUEST['phoneExt']);//remove backslashes
		$phoneExt = mysqli_real_escape_string($conn,$phoneExt);

		$phone = stripcslashes($_REQUEST['phone']);//remove backslashes
		$phone = mysqli_real_escape_string($conn,$phone);

		$subject = stripcslashes($_REQUEST['subject']);//remove backslashes
		$subject = mysqli_real_escape_string($conn,$subject);

		$password = stripcslashes($_REQUEST['password']);//remove backslashes
		$password = mysqli_real_escape_string($conn,$password);

		$register = ($_REQUEST['register']);

		$reg_date = date("Y-m-d H:i:s");
		//check if eamil exists
		//$sql = "SELECT * FROM student_info WHERE (username='$username' or email ='$email');";
		$sql = "SELECT * FROM student_info WHERE email='$email'";
		$res = mysqli_query($conn,$sql);
		if (mysqli_num_rows($res)>0) {
			# code...
			$row = mysqli_fetch_assoc($res);
			if ($email==$row['email']) {
				# code...
				echo "
				 <h1 style='color:red;text-align:center;'>email exists</h1> ";
			}
			//elseif($username==$row['username'])
		}	 
		else{
			$query = "INSERT INTO student_info(username, email, phoneExt, phone, subject, password, reg_date, register) VALUES ('$username', '$email','$phoneExt', '$phone', '$subject', '".md5($password)."', '$reg_date', '$register')";
				mysqli_query($conn, $query);
				echo " <h1 style='color:green;text-align:center; '>registration successfull</h1>Click here to<a href='login.php'>Log In</a>";
		}	
	}
	else {
		header("Location:registration.php");
		}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Student Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- logstyle css file -->
	<link rel="stylesheet" href="assets/css/logstyle.css">
	<!-- BS cdn links -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
	<?php 
		require_once('includes/dbconfig.php');
		session_start();
		if (isset($_POST['username'])) {
			# code...
			$username = stripcslashes($_REQUEST['username']);//remove backslashes
			$username = mysqli_real_escape_string($conn,$username);//removes special characters from a string
			$password = stripcslashes($_REQUEST['password']);//remove backslashes
			$password = mysqli_real_escape_string($conn,$password);
			 
			$query = "SELECT * FROM student_info WHERE username='$username' and password='".md5($password)."'";
			$result = mysqli_query($conn, $query);
			$row = mysqli_num_rows($result);
			
			if ($row==1) {
				# code...
				$_SESSION['username'] = $username;
				header('Location:index.php'); 
			}
			else{
				echo "<h3> Invalid Username/password!</h3>Click here to <a href='login.php'>Log In</a>";
			}
		}
		else{


	 ?>
	<div class="login-form">
    <form action="" method="post">
		<div class="avatar">
			<img src="assets/images/logo.png" alt="Avatar">
		</div>
        <h2 class="text-center">Member Login</h2>   
        <div class="form-group">
        	<input type="text" class="form-control" name="username" placeholder="Username" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>        
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
        </div>
		<div class="bottom-action clearfix">
            <label class="float-left form-check-label">
            	<input type="checkbox"> Remember me</label>
            <a href="#" class="float-right">Forgot Password?</a>
        </div>
    </form>
    <p class="text-center small">Don't have an account? <a href="registration.php">Sign up here!</a></p>
<?php } ?>
</div>
<?php require_once('includes/footer.php'); ?>
</body>
</html>
</body>
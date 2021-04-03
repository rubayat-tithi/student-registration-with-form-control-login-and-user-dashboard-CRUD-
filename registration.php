<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Registration</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
	<link rel="stylesheet" href="assets/css/cloud.css">

</head>
<body>
	<div id="clouds">
	    <div class="cloud x1"></div>
	    <!-- Time for multiple clouds to dance around -->
	    <div class="cloud x2"></div>
	    <div class="cloud x3"></div>
	    <div class="cloud x4"></div>
	    <div class="cloud x5"></div>
	    <!-- start main form -->
		<div class="container">
		<div class="card bg-transparent">
			<article class="card-body mx-auto" style="max-width: 400px;">
				<h4 class="card-title mt-3 text-center">Create Account</h4>
				<p class="text-center">Get started with your free account</p>
				<form method="post" action="registrationauth.php" name="registration">
					<div class="form-group input-group">
						<div class="input-group-prepend">
						    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
						 </div>
	        			<input name="username" class="form-control" placeholder="Full name" type="text" required>
	    			</div> 
	    			<!-- form-group - EMAIL -->
				    <div class="form-group input-group">
				    	<div class="input-group-prepend">
						    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
						 </div>
				        <input name="email" class="form-control" placeholder="Email address" type="email" required>
				    </div> 
				    <!-- form-group//PhoneExt -->
				    <div class="form-group input-group">
				    	<div class="input-group-prepend">
						    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
						</div>
						<select class="custom-select" style="max-width: 120px;" name="phoneExt">
						    <option selected="" value="BD">+88</option>
						    <option value="UK">+972</option>
						    <option value="US">+198</option>
						    <option value="Canada">+701</option>
						</select>
				    	<input name="phone" class="form-control" placeholder="Phone number" type="text">
				    </div> 
				    <!-- form-group// SUBJECT -->
				    <div class="form-group input-group">
				    	<div class="input-group-prepend">
						    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
						</div>
						<select class="form-control" name="subject" required>
							<option selected=""> Subjects</option>
							<option value="GD">GD</option>
							<option value="WDD">WDD</option>
							<option value="DM">DM</option>
						</select>
					</div> 
					<!-- form-group end.// PASSWORD -->
				    <div class="form-group input-group">
				    	<div class="input-group-prepend">
						    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
						</div>
				        <input class="form-control" placeholder="Create password" type="password" name="password" required>
				    </div> 
				    <!-- form-group end.// checkbox-->
				    <div class="form-group">
				       <input type="radio" name="register" value="self" required>Self
				       <input type="radio" name="register" value="other" required>Other
				    </div> 
				    <!-- form-group// BUTTON -->                                    
				    <div class="form-group">
				        <button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
				    </div> 
				    <!-- form-group// -->      
				    <p class="text-center">Have an account? <a href="login.php">Log In</a> 
				    </p>                                                                 
				</form>
			</article>
		</div> <!-- card.// -->
	</div> 
	<!-- container -->
</div> 
<!-- cloud -->
<?php require_once('includes/footer.php'); ?>
</body>
</html>
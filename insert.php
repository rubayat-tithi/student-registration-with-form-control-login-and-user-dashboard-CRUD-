<?php 
	require_once('includes/dbconfig.php');
	include_once('includes/sidebar.php');
	include_once('includes/adduserlink.php');

	if (isset($_POST['adduser']) && $_POST['adduser']==1) {
		 
		 $name = $_REQUEST['username'];
		 $email = $_REQUEST['email'];
		 $phoneExt = $_REQUEST['phoneExt'];
		 $phone = $_REQUEST['phone'];
		 $password = $_REQUEST['password'];
		 $subject = $_REQUEST['subject'];
		 $time = date("Y-m-d H:i:s");
		 $submittedby = $_SESSION['username'];
		 $add_query = "INSERT INTO addUser(username, email, phoneExt, phone, password, subject, reg_date, submittedby) VALUES ('$name','$email','$phoneExt', '$phone','".md5($password)."', '$subject',  '$time', '$submittedby')";
		 mysqli_query($conn,$add_query);
		 $success = "<h1>successfully added user</h1> <br> <a href='edit.php'> view record</a>";
		 echo $success;

	}
	else{

 ?>
 <div class="container">
		<div class="card bg-transparent">
			<article class="card-body mx-auto" style="max-width: 400px;">
				<h4 class="card-title mt-3 text-center">Add User</h4>
				<p class="text-center">Get started with your free account</p>
				<form method="post" action="" name="registration">
					<input type="hidden" name="adduser" value="1">
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
				    <!-- form-group// BUTTON -->                                    
				    <div class="form-group">
				        <button type="submit" class="btn btn-primary btn-block">Add</button>
				    </div> 
				                                                                     
				</form>
			<?php } ?>
			</article>
		</div> <!-- card.// -->
	</div> 
	<!-- container -->
	<?php require_once('includes/footer.php'); ?>
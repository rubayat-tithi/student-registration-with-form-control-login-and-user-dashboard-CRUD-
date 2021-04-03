<?php
	require_once('includes/dbconfig.php');
	include_once('includes/sidebar.php');
	include_once('includes/adduserlink.php');

	$id = $_REQUEST['id'];
	$query = "SELECT * FROM adduser WHERE id='".$id."'";
	$result = mysqli_query($conn,$query);
	$row = mysqli_fetch_assoc($result);

  ?>
  <div class="container">
		<div class="card bg-transparent">
			<article class="card-body mx-auto" style="max-width: 400px;">
				<h4 class="card-title mt-3 text-center">Edit User</h4>
	<?php 
		if (isset($_POST['new']) && $_POST['new']==1) {
			# code...
			$id = $_REQUEST['id'];
			 $name = $_REQUEST['username'];
			 $email = $_REQUEST['email'];
			 $phoneExt = $_REQUEST['phoneExt'];
			 $phone = $_REQUEST['phone'];
			 $password = $_REQUEST['password'];
			 $subject = $_REQUEST['subject'];
			 $time = date("Y-m-d H:i:s");
			 $submittedby = $_SESSION['username'];
			 $editQuery = "UPDATE adduser SET username='".$name."', email='".$email."', phoneExt='".$phoneExt."',phone='".$phone."', password='".$password."', subject='".$subject."',reg_date='".$time."', submittedby='".$submittedby."' WHERE id='".$id."'  ";
			 $r = mysqli_query($conn,$editQuery);
			 if ($r) {
			 	# code...
			 	echo "<h1 style='text-align:center;color:green;'>Success <br><a href='edit.php'>VIEW</a></h1> ";
			 }
		}
		else{ 
	 ?>
	 <form method="post" action="" name="edit">
					<input type="hidden" name="new" value="1">
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
				    <!-- form-group// -->                                                                   
				</form>
			<?php } ?>
			</article>
		</div> <!-- card.// -->
	</div> 
	<!-- container -->
	<?php require_once('includes/footer.php'); ?>
<?php 
	require_once('includes/dbconfig.php');
	include_once('includes/sidebar.php');
 ?>
 	<h2>Total Registerd Students</h2>
 	<table class="table table-bordered">
 		<thead>
 			<tr>
 				<th>ID</th>
 				<th>Username</th>
 				<th>E-mail</th>
 				<th>PhoneExt</th>
 				<th>Phone</th>
 				<th>Subject</th>
 				<th>Registration Date</th>
 				<th>Edit</th>
 				<th>Delete</th>
 			</tr>
 		</thead>
 		<tbody>
 		 <?php 
 		 	$count = 1;
 		 	$totalSql = "SELECT * FROM adduser";
 		 	$result = mysqli_query($conn,$totalSql);

 		 	while ($row = mysqli_fetch_assoc($result)) {
 		 ?>	 
 		 	<tr>
 		 		<td align="center">
 		 			<?php echo $count; ?>
 		 		</td>
 		 		<td align="center">
 		 			<?php echo $row['username']; ?>
 		 		</td>
 		 		<td align="center">
 		 			<?php echo $row['email']; ?>
 		 		</td>
 		 		<td align="center">
 		 			<?php echo $row['phoneExt']; ?>
 		 		</td>
 		 		<td align="center">
 		 			<?php echo $row['phone']; ?>
 		 		</td>
 		 		<td align="center">
 		 			<?php echo $row['subject']; ?>
 		 		</td>
 		 		<td align="center">
 		 			<?php echo $row['reg_date']; ?>
 		 		</td>
 		 		<td align="center">
 		 			 <a href="update.php?id=<?= $row['id']?>">Edit</a>
 		 		</td>
 		 		<td align="center">
 		 			<a href="delete.php?id=<?= $row['id']?>">Delete</a>
 		 		</td>
 		 	</tr>
 		 	<?php $count++; } ?>

 		</tbody>


 	</table>
 	<?php require_once('includes/footer.php'); ?>
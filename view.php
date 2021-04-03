<?php 
	require_once('includes/dbconfig.php');
	include_once('includes/sidebar.php');

	error_reporting(E_ALL);
	$limit = 10;
 ?>
 	<h2 style='text-align:center; color:green;font-weight:900'>Total Students</h2>
	<table width="100%" border="1" style="border-collapse:collapse;" >
	<thead>
		<tr>
			<th class="text-center"><strong>S.No</strong></th>
			<th class="text-center"><strong>SName</strong></th>
			<th class="text-center"><strong>Email</strong></th>
			<th class="text-center"><strong>Phone</strong></th>
			<th class="text-center"><strong>Subject</strong></th>
			<th class="text-center"><strong>Registration Date</strong></th>
			  
			<th class="text-center"><strong>Submitted By</strong></th>
			 
		</tr>
	</thead>
	<tbody>
 		 <?php 
 		 	$count = 1;
 		 	$totalSql = "SELECT username,email,phone,subject,reg_date,register FROM student_info UNION ALL SELECT username,email,phone,subject,reg_date,submittedby FROM adduser LIMIT $limit";
 		 	$result = mysqli_query($conn,$totalSql);

 		 	while ($row = mysqli_fetch_assoc($result)) {
 		 ?>	 
 		 	<tr>
			<td align="center">
				<?php echo $count; ?>	
			</td>
			<td align="center">
				<?php echo $row["username"]; ?>
			</td>

			<td align="center">
				<?php echo $row["email"]; ?>	
			</td>
			<td align="center">
				<?php echo $row["phone"]; ?>	
			</td>
			<td align="center">
				<?php echo $row["subject"]; ?>	
			</td>
			<td align="center">
				<?php echo $row["reg_date"]; ?>	
			</td>
			<td align="center">
				<?php echo $row["register"]; ?>	
			</td>
			 
		<?php $count++; }  ?>
	</tbody>
</table>
<?php require_once('includes/footer.php'); ?>
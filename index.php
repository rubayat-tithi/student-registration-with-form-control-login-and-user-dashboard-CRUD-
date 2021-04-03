<?php 
	include_once('includes/sidebar.php');
	require_once('includes/dbconfig.php');

 ?>
    <div class="user-dashboard">
        <h1>Hello, <?php  echo $_SESSION['username']; ?></h1>
    </div>
    <form action="" name="search" method="post">
    	<input type="text" name="search" placeholder="Search for Subject">
    	<input type="submit" value="Search">
    </form>
    <?php 
    	if (!empty($_POST['search'])) {
    		# code...
    		$searchBar = $_POST['search'];
    		$sql = "SELECT * FROM student_info WHERE subject LIKE '%$searchBar%' ";
    		$result = mysqli_query($conn,$sql);
    		$totalSearch = mysqli_num_rows($result);
    		if ($result) {
    			# code...
    			echo "<h1 style='font-weight:900;text-align:center;color:green;'>Showing Results</h1>" ;
    		?>
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
 				 
 			</tr>
 			</thead> 
 			<h2><?php echo $totalSearch;?> Results for '<?php echo $searchBar; ?>'</h2>
 			<?php 
 				while ($row = mysqli_fetch_assoc($result)) {
 					# code...
 				 
 			 ?>
 			 <tr>
 		 		<td align="center">
 		 			<?php echo $row['id']; ?>
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
 		 		 
 		 	</tr>
 		 <?php } ?>
 			 
 		
 		</tbody>
 		</table>
 	<?php } }  ?>
    		
    	
     
 
<?php require_once('includes/footer.php'); ?>

    <!-- Modal -->
    <div id="add_project" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Add Project</h4>
                </div>
                <div class="modal-body">
                            <input type="text" placeholder="Project Title" name="name">
                            <input type="text" placeholder="Post of Post" name="mail">
                            <input type="text" placeholder="Author" name="passsword">
                            <textarea placeholder="Desicrption"></textarea>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="cancel" data-dismiss="modal">Close</button>
                    <button type="button" class="add-project" data-dismiss="modal">Save</button>
                </div>
            </div>

        </div>
    </div>
<script>
	$(document).ready(function(){
   $('[data-toggle="offcanvas"]').click(function(){
       $("#navigation").toggleClass("hidden-xs");
   });
});

</script>
</body>
</body>
</html>
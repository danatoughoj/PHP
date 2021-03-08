<?php
require('includes/connection.php');

if(isset($_POST['submit'])){
	// fetch data from form 
	$email    = $_POST['email'];
	$password = $_POST['password'];
	$fullname = $_POST['fullname'];
	
	
	$query = "INSERT INTO admin(admin_email,admin_password,admin_fullname)
	         values('$email','$password','$fullname')";
	mysqli_query($conn,$query);
	
}




 include('includes/admin_header.php');  ?>
<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header">Manage Admin</div>
						<div class="card-body">
							<div class="card-title">
								<h3 class="text-center title-2">Create Admin</h3>
							</div>
							<hr>
							<form action="" method="post">
								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Admin Email</label>
									<input  name="email" type="email" class="form-control">
								</div>
								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Admin Fullname</label>
									<input  name="fullname" type="text" class="form-control">
								</div>
								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Admin Password</label>
									<input  name="password" type="password" class="form-control">
								</div>



								<div>
									<button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" name="submit">Save
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row m-t-30">
				<div class="col-md-12">
					<!-- DATA TABLE-->
					<div class="table-responsive m-b-40">
						<table class="table table-borderless table-data3">
							<thead>
								<tr>
									<th>ID</th>
									<th>Email</th>
									<th>Fullname</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$query  = "select * from admin";
								$result = mysqli_query($conn,$query);								
								while($row = mysqli_fetch_assoc($result)){
									echo "<tr>";
									echo "<td>{$row['admin_id']}</td>";
									echo "<td>{$row['admin_email']}</td>";
									echo "<td>{$row['admin_fullname']}</td>";
									echo "<td><a href='edit_admin.php?id={$row['admin_id']}' class='btn btn-warning'>Edit</a></td>";
									echo "<td><a href='delete_admin.php?id={$row['admin_id']}' class='btn btn-danger'>Delete</a></td>";
									echo "</tr>";
								}
								 ?>
							</tbody>
						</table>
					</div>
					<!-- END DATA TABLE-->
				</div>
			</div>
		</div>
	</div>
</div>



<?php include('includes/admin_footer.php');  ?>


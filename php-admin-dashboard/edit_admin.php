<?php
require('includes/connection.php');

if(isset($_POST['submit'])){
	// fetch data from form 
	$email    = $_POST['email'];
	$password = $_POST['password'];
	$fullname = $_POST['fullname'];
	
	
	$query = "UPDATE admin SET admin_email = '$email',
	                           admin_password = '$password',
	                           admin_fullname = '$fullname'
	                           WHERE admin_id = {$_GET['id']}";
	mysqli_query($conn,$query);
	header("location:manage_admin.php");
	
}

// fetch old data 
$query  = "select * from admin where admin_id = {$_GET['id']}";
$result = mysqli_query($conn,$query);
$row    = mysqli_fetch_assoc($result);

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
								<h3 class="text-center title-2">Edit Admin</h3>
							</div>
							<hr>
							<form action="" method="post">
								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Admin Email</label>
									<input  name="email" type="text" class="form-control" value="<?php echo $row['admin_email'] ?>">
								</div>
								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Admin Fullname</label>
									<input  name="fullname" type="text" class="form-control" value="<?php echo $row['admin_fullname'] ?>">
								</div>
								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Admin Password</label>
									<input  name="password" type="password" class="form-control" value="<?php echo $row['admin_password'] ?>">
								</div>



								<div>
									<button id="payment-button" type="submit" class="btn btn-lg btn-info" name="submit">Update
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			
					<!-- END DATA TABLE-->
				</div>
			</div>
		</div>
	</div>
</div>



<?php include('includes/admin_footer.php');  ?>


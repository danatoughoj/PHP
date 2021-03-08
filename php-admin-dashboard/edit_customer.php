<?php
require('includes/connection.php');

if(isset($_POST['submit'])){
	// fetch data from form 
	$email    = $_POST['email'];
	$password = $_POST['password'];
    $name     = $_POST['name'];
    $mobile   = $_POST['mobile'];
    $address  = $_POST['address'];
    $gender   = $_POST['gender'];
	
	
	$query = "UPDATE customers SET customer_email = '$email',
	                           customer_password = '$password',
	                           customer_name = '$name',
	                           customer_mobile = '$mobile',
	                           customer_address = '$address',
	                           customer_gender = '$gender'
	                           WHERE customer_id = {$_GET['id']}";
	mysqli_query($conn,$query);
	header("location:manage_customers.php");
	
}

// fetch old data 
$query  = "select * from customers where customer_id = {$_GET['id']}";
$result = mysqli_query($conn,$query);
$row    = mysqli_fetch_assoc($result);

 include('includes/admin_header.php');  ?>
<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header">Manage Customers</div>
						<div class="card-body">
							<div class="card-title">
								<h3 class="text-center title-2">Edit Customers</h3>
							</div>
							<hr>
							<form action="" method="post">
								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Customer Email</label>
									<input  name="email" type="email" class="form-control" value="<?php echo $row['customer_email'] ?>">
                                </div>
                                <div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Customer Name</label>
									<input  name="name" type="text" class="form-control" value="<?php echo $row['customer_name'] ?>">
								</div>
                                <div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Customer Mobile</label>
									<input  name="mobile" type="text" class="form-control" value="<?php echo $row['customer_mobile'] ?>">
                                </div>
                                <div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Customer Address</label>
									<input  name="address" type="text" class="form-control" value="<?php echo $row['customer_address'] ?>">
                                </div>
                                <div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Customer Gender</label>
									<input  name="gender" type="text" class="form-control" value="<?php echo $row['customer_gender'] ?>">
                                </div>
                                <div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Customer Password</label>
									<input  name="password" type="password" class="form-control" value="<?php echo $row['customer_password'] ?>">
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


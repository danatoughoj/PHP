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
	
	$query = "INSERT INTO customers (customer_email,customer_password,customer_name,customer_mobile,customer_address,customer_gender)
	         values('$email','$password','$name','$mobile','$address',' $gender')";
	mysqli_query($conn,$query);
	
}




 include('includes/admin_header.php');  ?>
<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header">Manage Customer</div>
						<div class="card-body">
							<div class="card-title">
								<h3 class="text-center title-2">Create Customer</h3>
							</div>
							<hr>
							<form action="" method="post">
								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Customer Email</label>
									<input  name="email" type="email" class="form-control">
                                </div>
                                <div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Customer Name</label>
									<input  name="name" type="text" class="form-control">
								</div>
                                <div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Customer Mobile</label>
									<input  name="mobile" type="text" class="form-control">
                                </div>
                                <div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Customer Address</label>
									<input  name="address" type="text" class="form-control">
                                </div>
                                <div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Customer Gender</label>
									<input  name="gender" type="text" class="form-control">
                                </div>
                                <div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Customer Password</label>
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
                                    <th>Name</th>
									<th>Mobile</th>
									<th>Address</th>
									<th>Gender</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$query  = "select * from customers";
								$result = mysqli_query($conn,$query);								
								while($row = mysqli_fetch_assoc($result)){
									echo "<tr>";
									echo "<td>{$row['customer_id']}</td>";
									echo "<td>{$row['customer_email']}</td>";
                                    echo "<td>{$row['customer_name']}</td>";
                                    echo "<td>{$row['customer_mobile']}</td>";
									echo "<td>{$row['customer_address']}</td>";
									echo "<td>{$row['customer_gender']}</td>";
									echo "<td><a href='edit_customer.php?id={$row['customer_id']}' class='btn btn-warning'>Edit</a></td>";
									echo "<td><a href='delete_customer.php?id={$row['customer_id']}' class='btn btn-danger'>Delete</a></td>";
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


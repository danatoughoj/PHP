<?php
require('includes/connection.php');

if(isset($_POST['submit'])){
	//image handeling
		$uploads_dir = 'C:\xampp\htdocs\tasks\CoolAdmin\admin\images\uploads';
		$fileName=$_FILES['image']['name'];
		$fileTemp=$_FILES['image']['tmp_name'];
		if(is_uploaded_file($fileTemp)){
			move_uploaded_file($fileTemp, "$uploads_dir/$fileName");
		}

	// fetch data from form 
	$name        = $_POST['name'];
	$description = $_POST['description'];	
	$image       = "images/uploads/$fileName";

	$query = "UPDATE categories SET category_name = '$name',
	                          category_description = '$description',
	                          category_image = '$image'
	                          WHERE category_id = {$_GET['id']}";
	mysqli_query($conn,$query);
	header("location:manage_category.php");
	
}

// fetch old data 
$query  = "select * from categories where category_id = {$_GET['id']}";
$result = mysqli_query($conn,$query);
$row    = mysqli_fetch_assoc($result);

 include('includes/admin_header.php');  ?>
<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header">Manage Category</div>
						<div class="card-body">
							<div class="card-title">
								<h3 class="text-center title-2">Edit Category</h3>
							</div>
							<hr>
							<form action="" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Category Name</label>
									<input  name="name" type="text" class="form-control" value="<?php echo $row['category_name'] ?>">
								</div>
								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Category description</label>
									<input  name="description" type="text" class="form-control" value="<?php echo $row['category_description'] ?>">
								</div>
								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Category image</label>
									<input  name="image" type="file" class="form-control">
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


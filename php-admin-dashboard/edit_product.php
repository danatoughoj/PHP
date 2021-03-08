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

		if(!empty($_POST['select'])) {
			$selected = $_POST['select'];     
		}

	// fetch data from form 
	$name          = $_POST['name'];
    $description   = $_POST['description'];	
	$price         = $_POST['price'];	
	$category_name = $selected;
	$image         = "images/uploads/$fileName";

	$query = "UPDATE products SET product_name = '$name',
	                          product_desc = '$description',
	                          product_price = '$price',
	                          category_id = '$selected',
	                          product_image = '$image'
	                          WHERE product_id = {$_GET['id']}";
	mysqli_query($conn,$query);
	header("location:manage_products.php");
	
}

// fetch old data 
$query  = "select * from products where product_id = {$_GET['id']}";
$result = mysqli_query($conn,$query);
$row    = mysqli_fetch_assoc($result);

 include('includes/admin_header.php');  ?>
<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header">Manage Product</div>
						<div class="card-body">
							<div class="card-title">
								<h3 class="text-center title-2">Edit Product</h3>
							</div>
							<hr>
							<form action="" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Product Name</label>
									<input  name="name" type="text" class="form-control" value="<?php echo $row['product_name'] ?>">
								</div>
								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Product description</label>
									<input  name="description" type="text" class="form-control" value="<?php echo $row['product_desc'] ?>">
								</div>
                                <div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Product price</label>
									<input  name="price" type="text" class="form-control" value="<?php echo $row['product_price'] ?>">
								</div>
								<div class="form-group">
                                    <label for="select" class="control-label mb-1">Category</label>
                                <select name="select" id="select" class="form-control">
																	
								<?php $query  = "select * from categories";
								$result = mysqli_query($conn,$query);								
											while($row = mysqli_fetch_assoc($result)){
												if ($row['category_id'] == $_GET['c']){
											echo '<option value="'.$row['category_id'].'" selected>'.$row["category_name"].'</option>';                              

												}
												else {
											echo '<option value="'.$row['category_id'].'">'.$row["category_name"].'</option>';  }                            
								} ?>

                                </select>
								 </div>
								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Product image</label>
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


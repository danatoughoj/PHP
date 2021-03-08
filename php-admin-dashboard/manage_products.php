<?php
require('includes/connection.php');

if(isset($_POST['submit'])){
    //image handeling
	$uploads_dir = 'C:\xampp\htdocs\tasks\CoolAdmin\admin\images\uploads';
    $fileName=$_FILES['product_image']['name'];
    $fileTemp=$_FILES['product_image']['tmp_name'];
    if(is_uploaded_file($fileTemp)){
        move_uploaded_file($fileTemp, "$uploads_dir/$fileName");
	}
	
	if(!empty($_POST['select'])) {
        $selected = $_POST['select'];     
    }

    // fetch data from form 
	$product_name        = $_POST['product_name'];
    $product_description = $_POST['product_description'];
	$product_price       = $_POST['product_price'];
	$category_name         = $selected;
	$product_image      = "images/uploads/$fileName";
	$query               = "INSERT INTO products (product_name,product_desc,product_price,product_image, category_id)
                            values('$product_name','$product_description','$product_price','$product_image', '$selected')";
                            mysqli_query($conn,$query);
}

 include('includes/admin_header.php');  ?>
<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header">Manage products</div>
						<div class="card-body">
							<div class="card-title">
								<h3 class="text-center title-2">Create product</h3>
							</div>
							<hr>
							<form action="" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label  class="control-label mb-1">Product Name</label>
									<input  name="product_name" type="text" class="form-control">
								</div>
								<div class="form-group">
									<label class="control-label mb-1">Product Description</label>
									<input  name="product_description" type="text" class="form-control">
								</div>
                                <div class="form-group">
									<label class="control-label mb-1">Product Price</label>
									<input  name="product_price" type="text" class="form-control">
								</div>

								<div class="form-group">
                                    <label for="select" class="control-label mb-1">Category</label>
                                <select name="select" id="select" class="form-control">
																	
								<?php $query  = "select * from categories";
								$result = mysqli_query($conn,$query);								
											while($row = mysqli_fetch_assoc($result)){
											echo '<option value="'.$row['category_id'].'">'.$row["category_name"].'</option>';                              
								} ?>

                                </select>
								 </div>


                                <div class="form-group">
									<label class="control-label mb-1">Product image</label>
									<input  name="product_image" type="file" class="form-control">
								</div>
								
								<div>
									<button type="submit" class="btn btn-lg btn-info btn-block" name="submit">Add
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
									<th>Product Name</th>
									<th>Product Description</th>
									<th>Product Price</th>
                                    <th>Category Name</th>
                                    <th>Product Image</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$query  = "SELECT * FROM products INNER JOIN categories ON products.category_id = categories.category_id";
								$result = mysqli_query($conn,$query);								
								while($row = mysqli_fetch_assoc($result)){
									echo "<tr>";
									echo "<td>{$row['product_id']}</td>";
									echo "<td>{$row['product_name']}</td>";
									echo "<td>{$row['product_desc']}</td>";
                                    echo "<td>{$row['product_price']}</td>";
                                    echo "<td>{$row['category_name']}</td>";
                                    echo "<td> <img src='".$row['product_image']."' width='100' > </img> </td>";
                                    echo "<td><a href='edit_product.php?id={$row['product_id']}&c={$row['category_id']}' class='btn btn-warning'>Edit</a></td>";
									echo "<td><a href='delete_product.php?id={$row['product_id']}' class='btn btn-danger'>Delete</a></td>";
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


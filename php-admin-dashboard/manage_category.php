<?php
require('includes/connection.php');

if(isset($_POST['submit'])){
    //image handeling
	$uploads_dir = 'C:\xampp\htdocs\tasks\CoolAdmin\admin\images\uploads';
    $fileName=$_FILES['category_image']['name'];
    $fileTemp=$_FILES['category_image']['tmp_name'];
    if(is_uploaded_file($fileTemp)){
        move_uploaded_file($fileTemp, "$uploads_dir/$fileName");
    }

    // fetch data from form 
	$category_name        = $_POST['category_name'];
	$category_description = $_POST['category_description'];
	$category_image       = "images/uploads/$fileName";
	$query = "INSERT INTO categories (category_name,category_description,category_image)
	         values('$category_name','$category_description','$category_image')";
	mysqli_query($conn,$query);
}




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
								<h3 class="text-center title-2">Create Category</h3>
							</div>
							<hr>
							<form action="" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Category Name</label>
									<input  name="category_name" type="text" class="form-control">
								</div>
								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Category Description</label>
									<input  name="category_description" type="text" class="form-control">
								</div>
                                <div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Category image</label>
									<input  name="category_image" type="file" class="form-control">
								</div>


								<div>
									<button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" name="submit">Add
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
									<th>Category Name</th>
									<th>Category Description</th>
                                    <th>Category Image</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$query  = "select * from categories";
								$result = mysqli_query($conn,$query);								
								while($row = mysqli_fetch_assoc($result)){
									echo "<tr>";
									echo "<td>{$row['category_id']}</td>";
									echo "<td>{$row['category_name']}</td>";
                                    echo "<td>{$row['category_description']}</td>";
                                    echo "<td> <img src='".$row['category_image']."' width='100' > </img> </td>";
									echo "<td><a href='edit_category.php?id={$row['category_id']}' class='btn btn-warning'>Edit</a></td>";
									echo "<td><a href='delete_category.php?id={$row['category_id']}' class='btn btn-danger'>Delete</a></td>";
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


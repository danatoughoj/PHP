<?php
    require("includes/db_connection.php");
	require("includes/public_header.php");
	$id=$_GET['id'];
?>
<section class="sec-product-detail bg0 p-t-100 p-b-60">
	<div class="container">
		<div class="row">
			<!-- Course Image -->
			<?php
			 $query="SELECT * FROM products WHERE product_id=$id";
			 $result=mysqli_query($conn,$query);
			 $row=mysqli_fetch_assoc($result);
				echo'
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-pic-w pos-relative">
							<img src="../admin/'.$row["product_image"].'" alt="IMG-PRODUCT">
							<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04"
								href="../admin/'.$row["product_image"].'">
								<i class="fa fa-expand"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							'.$row["product_name"].'
						</h4>
						<span class="mtext-106 cl2">
							'.$row["product_price"].'
						</span>
						<p class="stext-102 cl3 p-t-23">
							'.$row["product_desc"].'
						</p>

						<div class="p-t-33">
							<a href="add_to_cart.php?id='.$row["product_id"].'">
								<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
									Add to cart
								</button>
							</a>
						</div>
					</div>
				</div>

				<div class="bor10 m-t-50 p-t-43 p-b-40" style="width:100vw">
					<div class="tab01">
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item p-b-10">
								<a class="nav-link active" data-toggle="tab" href="#description"
									role="tab">Description</a>
							</li>
						</ul>

						<div class="tab-content p-t-43">
							<div class="tab-pane fade show active" id="description" role="tabpanel">
								<div class="how-pos2 p-lr-15-md">
									<p class="stext-102 cl6">
									'.$row['product_desc'].'
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				';
			?>
			
		</div>

	</div>
</section>

<?php
    require("includes/public_footer.php");
?>
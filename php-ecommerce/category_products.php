<?php
	require("includes/db_connection.php");
	require("includes/public_header.php");
	$id= $_GET["id"];
?>
<div class="bg0 m-t-100 p-b-140">
	<div class="container">
		<div class="row isotope-grid">
			<?php
			$query="SELECT * FROM products WHERE category_id=$id";
            $result=mysqli_query($conn,$query);
            while($row=mysqli_fetch_assoc($result)){
				echo '
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-45 isotope-item">
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="../admin/'.$row['product_image'].'" alt="IMG-PRODUCT">
							<a href="product.php?id='.$row['product_id'].'"
								class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								View
							</a>
						</div>
						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product.php?id='.$row['product_id'].'" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
								'.$row['product_name'].'
								</a>
								<span class="stext-105 cl3">
								'.$row['product_price'].' JOD
								</span>
							</div>
						</div>    
					</div>
				</div>
				';
			}
			?>
		</div>
		<div class="flex-c-m flex-w w-full p-t-45">
			<a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
				Load More
			</a>
		</div>
	</div>
</div>
		
<?php
	require("includes/public_footer.php");
?>
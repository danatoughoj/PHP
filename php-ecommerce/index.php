<?php
    require("includes/db_connection.php");
    require("includes/public_header.php");
?>
<section class="section-slide">
    <div class="wrap-slick1">
        <div class="slick1">
            <div class="item-slick1" style="background-image: url(images/slide-01.jpg);">
                <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                            <span class="ltext-101 cl2 respon2">
                                Computer Science Courses
                            </span>
                        </div>
                        <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                            <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                            New Courses 2021
                            </h2>
                        </div>
                        <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                            <a href="product.html"
                                class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                View Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item-slick1" style="background-image: url(images/slide-02.jpg);">
                <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
                            <span class="ltext-101 cl2 respon2">
                                Information Technology Courses
                            </span>
                        </div>
                        <div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
                            <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                                New Courses 2021
                            </h2>
                        </div>
                        <div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
                            <a href="product.html"
                                class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                View Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item-slick1" style="background-image: url(images/slide-03.jpg);">
                <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
                            <span class="ltext-101 cl2 respon2">
                                Social Sciences Course
                            </span>
                        </div>
                        <div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
                            <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                                New Courses 2021
                            </h2>
                        </div>
                        <div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
                            <a href="product.html"
                                class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                View Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="sec-banner bg0 p-t-80 p-b-50">
    <div class="container">
        <div class="row">
            <?php  
            $query="SELECT * FROM categories";
            $result=mysqli_query($conn,$query);
            while($row=mysqli_fetch_assoc($result)){
                echo '
                <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto" style="min-height:300px">
                <div class="block1 wrap-pic-w">
                    <img src="../admin/'.$row["category_image"].'" alt="IMG-BANNER" height="250px">
                    <a href="category_products.php?id='.$row["category_id"].'"
                        class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
                            <span class="block1-name ltext-102 trans-04 p-b-8">
                                '.$row["category_name"].'
                            </span>
                            <span class="block1-info stext-102 trans-04">
                                '.$row["category_description"].'
                            </span>
                        </div>
                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">
                                View Category
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            ';
            }
            ?>
        </div>
    </div>
</div>

<section class="bg0 p-t-23 p-b-140">
    <div class="container">
        <div class="p-b-10">
            <h3 class="ltext-103 cl5">
                Courses Overview
            </h3>
        </div>
        <div class="flex-w flex-sb-m p-b-52">
        </div>
        <div class="row isotope-grid">
        <?php
            $query="SELECT * FROM products";
            $result=mysqli_query($conn,$query);
            while($row=mysqli_fetch_assoc($result)){
                echo'
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
</section>

<?php
    require("includes/public_footer.php");
?>
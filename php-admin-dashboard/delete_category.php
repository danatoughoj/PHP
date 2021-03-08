<?php
require('includes/connection.php');

$query = "delete from categories where category_id = {$_GET['id']}";
mysqli_query($conn,$query);

header("location:manage_category.php");

 ?>
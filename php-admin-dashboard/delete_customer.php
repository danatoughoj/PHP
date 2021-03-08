<?php
require('includes/connection.php');

$query = "delete from customers where customer_id = {$_GET['id']}";
mysqli_query($conn,$query);

header("location:manage_customers.php");

 ?>
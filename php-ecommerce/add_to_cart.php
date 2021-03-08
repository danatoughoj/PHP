<?php
    session_start();
    // unset($_SESSION["order"]);
    $product_id=$_GET["id"];
    if(isset($_SESSION["order"])){
        array_push($_SESSION["order"],$product_id);
    }
    else{
        $_SESSION["order"]=[$product_id];
    }
    // echo "<pre>";
    // var_dump($_SESSION["order"]);
    header("location:cart.php");
?>
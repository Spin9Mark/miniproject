<?php

include("connect.php");

$o_ID = $_POST["order_id"];
$model = $_POST["model_id"];
$b_country = $_POST["buyer_country_id"];
$s_country = $_POST["seller_country_id"];
$res = $_POST["responsible_agency"];
$quantity = $_POST["quantity"];

$sql = "INSERT INTO `orders`(`order_id`, `model_id`, `buyer_country_id`, `seller_country_id`, `responsible_agency`, `quantity`) 
        VALUES ('$o_ID','$model','$b_country','$s_country','$res','$quantity')";

$result = mysqli_query($connection, $sql);

if($result){
    header("location:../order.php");
    exit();
}else{
    echo "Error!";
}
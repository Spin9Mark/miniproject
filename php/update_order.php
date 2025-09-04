<?php

include("connect.php");

$o_ID = $_POST["order_id"];
$model = $_POST["model_id"];
$b_country = $_POST["buyer_country_id"];
$s_country = $_POST["seller_country_id"];
$res = $_POST["responsible_agency"];
$quantity = $_POST["quantity"];

$sql = "UPDATE `orders` 
        SET `model_id`='$model',`buyer_country_id`='$b_country',`seller_country_id`='$s_country',`responsible_agency`='$res',`quantity`='$quantity'
        WHERE `order_id` = '$o_ID' ";

$result = mysqli_query($connection, $sql);

if($result){
    header("location:../order.php");
    exit();
}else{
    echo "Error!";
}
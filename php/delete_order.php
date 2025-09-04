<?php

include("connect.php");

// รับข้อมูล
$orId = $_GET["order_id"];

$sql = "DELETE FROM orders WHERE order_id = '$orId' ";

$result = mysqli_query($connection, $sql);

if($result){
    header("location:../order.php");
    exit();
}else{
    echo "Error!";
}
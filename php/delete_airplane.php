<?php

include("connect.php");

// รับข้อมูล
$mdId = $_GET["model_id"];

// echo "$pdId";

$sql = "DELETE FROM airplanes WHERE model_id = '$mdId' ";

$result = mysqli_query($connection, $sql);

if($result){
    header("location:../airplane.php");
    exit();
}else{
    echo "Error!";
}
<?php

include("connect.php");

// รับข้อมูล
$typeId = $_GET["type_id"];

$sql = "DELETE FROM model_types WHERE type_id = '$typeId' ";

$result = mysqli_query($connection, $sql);

if($result){
    header("location:../model_types.php");
    exit();
}else{
    echo "Error!";
}
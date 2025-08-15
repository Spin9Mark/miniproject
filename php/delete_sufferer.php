<?php

include("connect.php");

// รับข้อมูล
$cId = $_GET["c_id"];

// echo "$cId";

$sql = "DELETE FROM sufferers WHERE c_id = '$cId' ";

$result = mysqli_query($connection, $sql);

if($result){
    header("location:../sufferer.php");
    exit();
}else{
    echo "Error!";
}
<?php

include("connect.php");

// รับข้อมูล
$plId = $_GET["pl_id"];

// echo "$plId";

$sql = "DELETE FROM polices WHERE pl_id = '$plId' ";

$result = mysqli_query($connection, $sql);

if($result){
    header("location:../police.php");
    exit();
}else{
    echo "Error!";
}
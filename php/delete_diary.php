<?php

include("connect.php");

// รับข้อมูล
$pdId = $_GET["pd_id"];

// echo "$pdId";

$sql = "DELETE FROM police_diaries WHERE pd_id = '$pdId' ";

$result = mysqli_query($connection, $sql);

if($result){
    header("location:../police_diary.php");
    exit();
}else{
    echo "Error!";
}
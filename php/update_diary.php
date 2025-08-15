<?php

include("connect.php");

$detail = $_POST["detail"];
$date = $_POST["date"];
$csId = $_POST["cs_id"];
$cId = $_POST["c_id"];
$plId = $_POST["pl_id"];

// echo "$cId $fullName $tel $address";

$sql = "UPDATE `police_diaries` 
        SET `detail`='$detail',`date`='$date',`cs_id`='$csId',`c_id`='$cId' , `pl_id`='$plId'  
        WHERE `c_id` = '$cId' ";

$result = mysqli_query($connection, $sql);

if($result){
    header("location:../police_diary.php");
    exit();
}else{
    echo "Error!";
}
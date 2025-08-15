<?php

include("connect.php");

$detail = $_POST["detail"];
$date = $_POST["date"];
$cs_id = $_POST["cs_id"];
$c_id = $_POST["c_id"];
$pl_id = $_POST["pl_id"];

// echo "$cId $fullName $tel $address";

$sql = "INSERT INTO `police_diaries`(`detail`, `date`, `cs_id`, `c_id`, `pl_id`) 
        VALUES ('$detail','$date','$cs_id','$c_id','$pl_id')";

$result = mysqli_query($connection, $sql);

if($result){
    header("location:../police_diary.php");
    exit();
}else{
    echo "Error!";
}
<?php

include("connect.php");

$cId = $_POST["c_id"];
$fullName = $_POST["full_name"];
$tel = $_POST["tel"];
$address = $_POST["address"];

// echo "$cId $fullName $tel $address";

$sql = "UPDATE `sufferers` 
        SET `c_id`='$cId',`full_name`='$fullName',`tel`='$tel',`address`='$address' 
        WHERE `c_id` = '$cId' ";

$result = mysqli_query($connection, $sql);

if($result){
    header("location:../sufferer.php");
    exit();
}else{
    echo "Error!";
}
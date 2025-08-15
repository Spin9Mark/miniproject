<?php

include("connect.php");

$csId = $_POST["cs_id"];
$csName = $_POST["cs_name"];

// echo "$csName";

$sql = "UPDATE `case_types` 
        SET `cs_name`='$csName'
        WHERE `cs_id` = '$csId' ";

$result = mysqli_query($connection, $sql);

if($result){
    header("location:../case_type.php");
    exit();
}else{
    echo "Error!";
}
<?php

include("connect.php");

$type_id = $_POST["type_id"];
$type_name = $_POST["type_name"];

$sql = "UPDATE `model_types` 
        SET `type_name`='$type_name' 
        WHERE `type_id` = '$type_id' ";

$result = mysqli_query($connection, $sql);

if($result){
    header("location:../model_types.php");
    exit();
}else{
    echo "Error!";
}
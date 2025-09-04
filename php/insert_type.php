<?php

include("connect.php");

$type_name = $_POST["type_name"];

$sql = "INSERT INTO `model_types`(`type_name`) 
        VALUES ('$type_name')";

$result = mysqli_query($connection, $sql);

if($result){
    header("location:../model_types.php");
    exit();
}else{
    echo "Error!";
}
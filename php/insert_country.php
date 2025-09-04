<?php

include("connect.php");

$country_name = $_POST["country_name"];

$sql = "INSERT INTO `countries`(`country_name`) 
        VALUES ('$country_name')";

$result = mysqli_query($connection, $sql);

if($result){
    header("location:../country.php");
    exit();
}else{
    echo "Error!";
}
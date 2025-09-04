<?php

include("connect.php");

$country_id = $_POST["country_id"];
$country_name = $_POST["country_name"];

$sql = "UPDATE `countries` 
        SET `country_name`='$country_name' 
        WHERE `country_id` = '$country_id' ";

$result = mysqli_query($connection, $sql);

if($result){
    header("location:../country.php");
    exit();
}else{
    echo "Error!";
}
<?php

include("connect.php");

$m_ID = $_POST["model_id"];
$m_name = $_POST["model_name"];
$type = $_POST["type_id"];
$c_c = $_POST["company_created"];
$country = $_POST["country_id"];
$yop = $_POST["year_of_production"];
$gen = $_POST["generation"];
$price = $_POST["estimated_price"];

$sql = "UPDATE `airplanes` 
        SET `model_id`='$m_ID',`model_name`='$m_name',`type_id`='$type',`company_created`='$c_c',`country_id`='$country',`year_of_production`='$yop',`generation`='$gen',`estimated_price`='$price' 
        WHERE `model_id` = '$m_ID' ";

$result = mysqli_query($connection, $sql);

if($result){
    header("location:../airplane.php");
    exit();
}else{
    echo "Error!";
}
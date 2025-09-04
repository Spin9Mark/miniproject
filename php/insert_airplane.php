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

// echo "$cId $fullName $tel $address";

$sql = "INSERT INTO `airplanes`(`model_id`, `model_name`, `type_id`, `company_created`, `country_id`, `year_of_production`, `generation`, `estimated_price`) 
        VALUES ('$m_ID','$m_name','$type','$c_c','$country','$yop','$gen','$price')";

$result = mysqli_query($connection, $sql);

if($result){
    header("location:../airplane.php");
    exit();
}else{
    echo "Error!";
}
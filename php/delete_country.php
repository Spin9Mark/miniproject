<?php

include("connect.php");

// รับข้อมูล
$country_id = $_GET["country_id"];



$sql = "DELETE FROM countries WHERE country_id = '$country_id' ";

$result = mysqli_query($connection, $sql);

if($result){
    header("location:../country.php");
    exit();
}else{
    echo "Error!";
}
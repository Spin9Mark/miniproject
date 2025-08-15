<?php

include("connect.php");

$csName = $_POST["cs_name"];

// echo "$cId $fullName $tel $address";

$sql = "INSERT INTO `case_types`(`cs_name`) 
        VALUES ('$csName');";

$result = mysqli_query($connection, $sql);

if($result){
    header("location:../case_type.php");
    exit();
}else{
    echo "Error!";
}
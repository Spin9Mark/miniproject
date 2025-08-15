<?php

include("connect.php");

$cId = $_POST["c_id"];
$fullName = $_POST["full_name"];
$tel = $_POST["tel"];
$address = $_POST["address"];

// echo "$cId $fullName $tel $address";

$sql = "INSERT INTO `sufferers`(`c_id`, `full_name`, `tel`, `address`) 
        VALUES ('$cId','$fullName','$tel','$address');";

$result = mysqli_query($connection, $sql);

if($result){
    header("location:../sufferer.php");
    exit();
}else{
    echo "Error!";
}
<?php

include("connect.php");

$plId = $_POST["pl_id"];
$fullName = $_POST["full_name"];
$rank = $_POST["rank"];
$tel = $_POST["tel"];

// echo "$cId $fullName $tel $address";

$sql = "INSERT INTO `polices`(`pl_id`, `full_name`, `rank`, `tel`) 
        VALUES ('$plId','$fullName','$rank','$tel');";

$result = mysqli_query($connection, $sql);

if($result){
    header("location:../police.php");
    exit();
}else{
    echo "Error!";
}
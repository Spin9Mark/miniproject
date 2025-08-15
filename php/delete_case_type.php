<?php

include("connect.php");

// รับข้อมูล
$csId = $_GET["cs_id"];

// echo "$csId";

$sql = "DELETE FROM case_types WHERE cs_id = '$csId' ";

$result = mysqli_query($connection, $sql);

if($result){
    header("location:../case_type.php");
    exit();
}else{
    echo "Error!";
}
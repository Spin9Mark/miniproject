<?php

include("connect.php");

$plId = $_POST["pl_id"];
$fullName = $_POST["full_name"];
$rank = $_POST["rank"];
$tel = $_POST["tel"];

// echo "$plId $fullName $rank $tel";

$sql = "UPDATE `polices` 
        SET `pl_id`='$plId',`full_name`='$fullName',`rank`='$rank',`tel`='$tel' 
        WHERE `pl_id` = '$plId' ";

$result = mysqli_query($connection, $sql);

if($result){
    header("location:../police.php");
    exit();
}else{
    echo "Error!";
}
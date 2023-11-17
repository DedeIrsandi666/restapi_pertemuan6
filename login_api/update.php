<?php
header('Content-Type: application/json');
include('db.php');
if(!isset($_POST['UID']) && !isset($_POST['NAME']) && !isset($_POST['UNAME']) && !isset($_POST['UPASS'])) {
    echo json_encode("No Data Sent");
}
else{
    $id = $_POST['UID'];
    $name = $_POST['NAME'];
    $address = $_POST['UNAME'];
    $salary = $_POST['UPASS'];
    $result = mysqli_query($db,"UPDATE users SET NAME = '{$name}', UNAME ='{$address}', UPASS='{$salary}' WHERE UID ={$id}");
    if($result)
    {
        echo json_encode("Success");
    }
    else{
        echo json_encode("Failed");
    }
}
?>
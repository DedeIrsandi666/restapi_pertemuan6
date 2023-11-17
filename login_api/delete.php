<?php
header('Content-Type: application/json');
include('db.php');
if(!isset($_POST['id'])) {
    echo json_encode("No Data Sent");
}
else{
    $id = $_POST['UID'];
    $result = mysqli_query($db,"DELETE FROM users WHERE UID = {$id}");
    if($result)
    {
        echo json_encode("Success");
    }
    else{
        echo json_encode("Failed");
    }
}
?>
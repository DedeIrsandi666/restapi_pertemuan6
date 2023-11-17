<?php
header('Content-Type: application/json');
include('db.php');
    if(!isset($_POST['NAME']) && !isset($_POST['UNAME']) && ($_POST['UPASS'])) {
        echo json_encode("No Data Sent");
    }
    else{
        $name = $_POST['NAME'];
        $address = $_POST['UNAME'];
        $salary = $_POST['UPASS'];
        $result = mysqli_query($db,"INSERT INTO users (NAME, UNAME, UPASS) VALUES ('{$name}','{$address}','{$salary}')");

        if($result)
        {
            echo json_encode("Success");
        }
        else{
            echo json_encode("Failed");
        }
    }
?>
<?php
    include "connection.php";

    error_reporting(0);
    session_start();
    
    echo "Welcome Server";
    
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $name = $_POST['wname'];
        $phone = $_POST['wphone'];
        $address = $_POST['waddress'];
        $dob = $_POST['wdob'];
        $sql = "INSERT INTO ward_boy (`WB_name`, `WB_phone`, `WB_Address`, `WB_DOB`) VALUES ('$name', '$phone','$address','$dob')"; 
        $result = mysqli_query($conn, $sql);
        
        $sql = "SELECT * FROM `ward_boy` ORDER BY `WB_id` DESC LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $uidmax=$row['WB_id'];

        header("location: ../../../Frontend/Pages/wardboy_confirmation.php?uid=".$uidmax);
    }
?>
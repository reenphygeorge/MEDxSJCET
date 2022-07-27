<?php
    include "connection.php";

    error_reporting(0);
    session_start();
    
    echo "Welcome Server";
    
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $name = $_POST['pname'];
        $phone = $_POST['pphone'];
        $gender = $_POST['pgender'];
        $address = $_POST['paddress'];
        
        $sql = "INSERT INTO patient (`P_name`, `P_phone`, `P_gender`, `P_Address`) VALUES ('$name', '$phone', '$gender', '$address')";
        $result = mysqli_query($conn, $sql);

        $sql = "SELECT * FROM `patient` ORDER BY `P_id` DESC LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $pid=$row['P_id'];

        header("location: ../../../Frontend/Pages/patient_create_confirmation.php?uid=".$pid);
    }
?>

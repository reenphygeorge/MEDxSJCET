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
        $disease = $_POST['disease'];
        $did = $_POST['D_id'];
        $rid = $_POST['R_id'];
        $date_admit = $_POST['d_admit'];
        $date_checkout = $_POST['d_check'];
        $status = $_POST['status'];
        
        $sql = "INSERT INTO patient (`P_name`, `P_phone`, `P_gender`, `disease`, `D_id`, `R_id`, `Date_admitted`, `Date_checkedout`, `Status`) VALUES ('$name', '$phone', '$gender','$disease', '$did', '$rid', '$d_admit', '$date_checkout', '$status')";
        $result = mysqli_query($conn, $sql);
        // header("location: index.html");
    }
?>
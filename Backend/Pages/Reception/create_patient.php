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
        if(!empty($name) && !empty($phone) && !empty($gender) && !empty($address)) {    
            $result = mysqli_query($conn, $sql);
        }
        // header("location: index.html");
    }
?>
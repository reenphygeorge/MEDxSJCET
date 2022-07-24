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
        // header("location: index.html");
    }
?>
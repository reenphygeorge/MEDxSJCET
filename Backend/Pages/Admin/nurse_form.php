<?php
    include "connection.php";

    error_reporting(0);
    session_start();
    
    echo "Welcome Server";
    
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $name = $_POST['nname'];
        $phone = $_POST['nphone'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $dob = $_POST['dob'];

        $sql = "INSERT INTO nurse (`N_Name`, `N_phonenumber`, `N_gender`,`N_address`,`N_DOB`) VALUES ('$name', '$phone', '$gender', '$address', '$dob')";
        $result = mysqli_query($conn, $sql);

        $sql = "SELECT * FROM `nurse` ORDER BY `N_id` DESC LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $uidmax=$row['N_id'];

        header("location: ../../../Frontend/Pages/nurse_confirmation.php?uid=".$uidmax);
    }
?>
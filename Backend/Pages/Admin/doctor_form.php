<?php
    include "connection.php";

    error_reporting(0);
    session_start();
    
    echo "Welcome Server";
    
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $name = $_POST['dname'];
        $spec = $_POST['dspec'];
        $phone = $_POST['dphone'];
        $dept = $_POST['ddept'];
        $address = $_POST['address'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $password = $_POST['dpass'];

        $sql = "INSERT INTO doctor (`D_Name`, `Specialization`, `Phone_No`,`Department`,`Address`,`DOB`,`Gender`) VALUES ('$name', '$spec', '$phone', '$dept','$address','$dob','$gender')";    
        $result = mysqli_query($conn, $sql);
        
        $sql = "SELECT * FROM `doctor` ORDER BY `D_id` DESC LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $uidmax=$row['D_id'];

        $sql = "INSERT INTO credentials (`user_id`, `user_name`, `password`,`status`) VALUES ('$uidmax', '$name', '$password', 'doctor')";
        $result = mysqli_query($conn, $sql);
        // header("location: index.html");
    }
?>
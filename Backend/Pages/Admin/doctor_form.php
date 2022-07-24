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
        $sql = "INSERT INTO doctor (`D_Name`, `Specialization`, `Phone_No`,`Department`,`Address`,`DOB`,`Gender`) VALUES ('$name', '$spec', '$phone', '$dept','$address','$dob','$gender')";    
        $result = mysqli_query($conn, $sql);
        // header("location: index.html");
    }
?>
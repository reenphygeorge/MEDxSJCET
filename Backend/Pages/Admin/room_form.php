<?php
    include "connection.php";

    error_reporting(0);
    session_start();
    
    echo "Welcome Server";
    
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $no = $_POST['rid'];
        $type = $_POST['rtype'];
        $sql = "INSERT INTO room (`R_id`,`R_Type`) VALUES ('$no','$type')";  
            $result = mysqli_query($conn, $sql);
        // header("location: index.html");
    }
?>
<?php
    include "connection.php";

    error_reporting(0);
    session_start();
    
    echo "Welcome Server";
    
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $pid = $_POST['pid'];
        $did = $_POST['did'];
        
        $sql = "UPDATE patient SET D_id = '$did' WHERE P_id = '$pid'";
        if(!empty($pid) && !empty($did)) {  
            $result = mysqli_query($conn, $sql);
        }
    }
?>
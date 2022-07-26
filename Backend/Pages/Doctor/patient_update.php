<?php
    include "connection.php";

    error_reporting(0);
    session_start();
    
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $pid = $_POST['pid'];
        $disease = $_POST['disease'];
        $rid = $_POST['rid'];
        $adm_date = $_POST['adm_date'];
        
        $sql = "UPDATE patient SET R_id = '$rid', disease = '$disease', Date_admitted = '$adm_date' WHERE P_id = '$pid'"; 
        $result = mysqli_query($conn, $sql);

        $sql = "UPDATE room SET available = 'no' WHERE R_id = '$rid'"; 
        $result = mysqli_query($conn, $sql);
        header("location: ../../../Frontend/Pages/update_patient_confirmation.php?uid=".$pid);
    }
?>
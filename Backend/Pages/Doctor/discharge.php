<?php
    include "connection.php";

    error_reporting(0);
    session_start();

    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $pid = $_POST['pid'];
        $dis_date = $_POST['dis_date'];

        $sql = "SELECT R_id FROM patient WHERE P_id = '$pid'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $rid = $row["R_id"];

        $sql = "UPDATE patient SET R_id = NULL, Date_checkedout = '$dis_date' WHERE P_id = '$pid'"; 
        $result = mysqli_query($conn, $sql);

        $sql = "UPDATE room SET available = 'yes' WHERE R_id = '$rid'"; 
        $result = mysqli_query($conn, $sql);

        $did = $_SESSION['doctor_id'];
        header("location: ../../../Frontend/Pages/discharge_patient_confirmation.php?id=$did");
    }
?>
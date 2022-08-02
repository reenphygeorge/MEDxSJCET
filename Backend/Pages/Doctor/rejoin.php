<?php
    include "connection.php";

    error_reporting(0);
    session_start();
    if(isset($_POST['rejoin'])) {
        $sql = "UPDATE doctor SET On_Leave = 0, Leave_From = NULL, Leave_To = NULL, Leave_Reason = NULL WHERE D_id = ".$_POST['rejoin'];
        $result = mysqli_query($conn, $sql);
        header("location: ../../../Frontend/Pages/doctor_welcome_back.html");
    }

?>
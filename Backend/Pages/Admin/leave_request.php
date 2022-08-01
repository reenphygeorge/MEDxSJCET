<?php
    include "connection.php";

    error_reporting(0);
    session_start();
    if(isset($_POST['grant_leave'])) {
        $sql = "UPDATE doctor SET Leave_Req = 0, On_Leave = 1 WHERE D_id = ".$_POST['grant_leave'];
        $result = mysqli_query($conn, $sql);
        header("location: ../../../Frontend/Pages/admin_leave_granted.html");
    }
    if(isset($_POST['reject_leave'])) {
        $sql = "UPDATE doctor SET Leave_Req = 0, Leave_Rejected = 1 WHERE D_id = ".$_POST['reject_leave'];
        $result = mysqli_query($conn, $sql);
        header("location: ../../../Frontend/Pages/admin_leave_rejected.html");
    }

?>
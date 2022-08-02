<?php
    include "connection.php";

    error_reporting(0);
    session_start();
    
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $leave_from = $_POST['leave_from'];
        $leave_to = $_POST['leave_to'];
        $leave_reason = $_POST['leave_reason'];
        
        $sql = "UPDATE doctor SET Leave_Req = 1, Leave_From = '$leave_from', Leave_To = '$leave_to', Leave_Reason = '$leave_reason' WHERE D_id = ".$_SESSION['doctor_id']; 
        $result = mysqli_query($conn, $sql);
        header("location: ../../../Frontend/Pages/doctor_leave_req_confirmation.html");
    }
?>
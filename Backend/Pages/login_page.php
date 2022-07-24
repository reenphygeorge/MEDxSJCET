<?php
    include "connection.php";

    error_reporting(0);
    session_start();
    
    echo "Welcome Server";
    
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $name = $_POST['name'];
        $pass = $_POST['pass'];
        
        $sql = "SELECT * FROM `credentials` WHERE user_id = '$name'";
        if(!empty($name) && !empty($pass)) {    
            $result = mysqli_query($conn, $sql);
            $result_arr = mysqli_fetch_array($result);
            $login_id =  $result_arr["user_id"];
            $login_name = $result_arr["user_name"];
            $login_pass = $result_arr["password"];
            $status = $result_arr["status"];
            $offset = $login_id;
            if(empty($login_id)) {
                // No user found condition
                // $offset[1] = 0;
                // header("location: admin_dashboard.php?offset="$offset);
            }
            else if(strcmp($login_pass,$pass)==0) {
                if(strcmp($status,"admin")==0) {
                    header("location: /MEDxSJCET/Frontend/Pages/admin_panel.html");
                }
                else if(strcmp($status,"doctor")==0) {
                    $_SESSION["doctor_id"] = $login_id;
                    header("location: /MEDxSJCET/Frontend/Pages/doctor_panel.html");
                }
                else {
                    header("location: /MEDxSJCET/Frontend/Pages/receptionist_panel.html");
                }
            }
            else {
                // Password Error
                // $offset[1] = -1;
                // header("location: admin_dashboard.php?offset=".http_build_query($offset));
            }
        }
    }
?>
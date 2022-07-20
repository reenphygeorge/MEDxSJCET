<?php
    include "connection.php";

    error_reporting(0);
    session_start();
    
    echo "Welcome Server";
    
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $name = $_POST['name'];
        $pass = $_POST['pass'];
        
        $sql = "SELECT * FROM `credential` WHERE user_id = '$name'";
        if(!empty($name) && !empty($pass)) {    
            $result = mysqli_query($conn, $sql);
            $result_arr = mysqli_fetch_array($result);
            $login_id =  $result_arr["user_id"];
            $login_name = $result_arr["user_name"];
            $login_pass = $result_arr["password"];
            $status = $result_arr["status"];
            $offset = $login_name;
            if(empty($login_id)) {
                // No user found condition
                // $offset[1] = 0;
                // header("location: admin_dashboard.php?offset="$offset);
            }
            else if(strcmp($login_pass,$pass)==0) {
                if(strcmp($status,"admin")) {
                    header("location: Admin/dashboard.php?offset="$login_name);
                }
                else if(strcmp($status,"doctor")) {
                    header("location: ./Admin/dashboard.php?offset="$login_name);
                }
                else {
                    header("location: Reception/dashboard.php?offset="$login_name);
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="Frontend/stylesheets/index.css">
    <title>MEDxSJCET</title>
</head>

<body>
    <form action="" method="post">
        <label for="">USERNAME</label>
        <input type="text" name="name" required>
        <label for="">PASSWORD</label>
        <input type="password" name="pass" required>
        <button>SignIN</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>

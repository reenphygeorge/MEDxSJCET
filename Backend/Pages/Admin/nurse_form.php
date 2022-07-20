<?php
    include "connection.php";

    error_reporting(0);
    session_start();
    
    echo "Welcome Server";
    
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $name = $_POST['nname'];
        $phone = $_POST['nphone'];
        $gender = $_POST['ngender'];
        $sql = "INSERT INTO nurse (`N_Name`, `N_phonenumber`, `N_gender`) VALUES ('$name', '$phone', '$gender')";
        if(!empty($name) && !empty($phone) && !empty($gender)) {    
            $result = mysqli_query($conn, $sql);
        }
        unset($name);
        unset($phone);
        unset($gender);
        // header("location: index.html");
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
        <label for="">Name</label>
        <input type="text" name="nname">
        <label for="">Phone</label>
        <input type="tel" name="nphone">
        <label for="">Gender</label>
        <input type="text" name="ngender">
        <button>Submit</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>

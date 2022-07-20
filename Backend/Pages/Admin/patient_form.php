<?php
    include "connection.php";

    error_reporting(0);
    session_start();
    
    echo "Welcome Server";
    
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $name = $_POST['pname'];
        $phone = $_POST['pphone'];
        $gender = $_POST['pgender'];
        $disease = $_POST['disease'];
        $did = $_POST['D_id'];
        $rid = $_POST['R_id'];
        $date_admit = $_POST['d_admit'];
        $date_checkout = $_POST['d_check'];
        $status = $_POST['status'];
        
        $sql = "INSERT INTO patient (`P_name`, `P_phone`, `P_gender`, `disease`, `D_id`, `R_id`, `Date_admitted`, `Date_checkedout`, `Status`) VALUES ('$name', '$phone', '$gender','$disease', '$did', '$rid', '$d_admit', '$date_checkout', '$status')";
        if(!empty($name) && !empty($phone) && !empty($gender) && !empty($disease) && !empty($did) && !empty($rid) && !empty($d_admit) && !empty($status)) {    
            $result = mysqli_query($conn, $sql);
        }
        unset($name);
        unset($phone);
        unset($gender);
        unset($disease);
        unset($did);
        unset($rid);
        unset($date_admit);
        unset($date_checkout);
        unset($status);
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
        <label for="">Pname</label>
        <input type="text" name="pname">
        <label for="">Pphone</label>
        <input type="text" name="pphone">
        <label for="">Pgender</label>
        <input type="text" name="pgender">
        <label for="">disease</label>
        <input type="text" name="disease">
        <label for="">Did</label>
        <input type="text" name="D_id">
        <label for="">Rid</label>
        <input type="text" name="R_id">
        <label for="">Date_admitted</label>
        <input type="text" name="d_admit">
        <label for="">Date_checkedout</label>
        <input type="text" name="d_check">
        <label for="">Status</label>
        <input type="text" name="status">
        <button>Submit</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>

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
        $address = $_POST['paddress'];
        // $disease = $_POST['disease'];
        // $did = $_POST['D_id'];
        // $rid = $_POST['R_id'];
        // $date_admit = $_POST['d_admit'];
        // $date_checkout = $_POST['d_check'];
        
        $sql = "INSERT INTO patient (`P_name`, `P_phone`, `P_gender`, `P_Address`) VALUES ('$name', '$phone', '$gender', '$address')";
        if(!empty($name) && !empty($phone) && !empty($gender) && !empty($address)) {    
            $result = mysqli_query($conn, $sql);
        }
        unset($name);
        unset($phone);
        unset($gender);
        unset($address);
        // unset($disease);
        // unset($did);
        // unset($rid);
        // unset($date_admit);
        // unset($date_checkout);
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
        <input type="text" name="pphone"><br><br>

        <label for="">Pgender</label><br>
        <input type="radio" id="male" name="pgender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="pgender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="pgender" value="other">
        <label for="other">Other</label><br><br>
        
        <label for="">PAddress</label>
        <textarea type="text" name="paddress"></textarea>
        <button>Submit</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>

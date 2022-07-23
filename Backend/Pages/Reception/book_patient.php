<?php
    include "connection.php";

    error_reporting(0);
    session_start();
    
    echo "Welcome Server";
    
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $pid = $_POST['pid'];
        $did = $_POST['dname'];
        
        $sql = "UPDATE patient SET D_id = '$did' WHERE P_id = '$pid'";
        if(!empty($pid) && !empty($did)) {  
            $result = mysqli_query($conn, $sql);
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
        <label for="">PID</label>
        <input type="text" name="pid">

        <label>Select Doctor</label>

        <select name="dname">
            <?php
                include "connection.php";

                error_reporting(0);
                session_start();
                
                $sql = "SELECT * FROM doctor";
                $result = mysqli_query($conn, $sql);

                while($row = mysqli_fetch_array($result)) {
                    echo "<option value=" . $row["D_id"] . ">" . $row["D_Name"] . "</option>";
                }
            ?>
        </select> 

        <!-- <label for="">DID</label>
        <input type="text" name="did"> -->
        <button>Submit</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
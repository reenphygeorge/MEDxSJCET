<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstarp CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../stylesheets/navbar.css" />
    <link rel="stylesheet" href="../stylesheets/confirmation.css" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
    <title>MEDxSJCET</title>
</head>

<body>
    <div class="container">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="d-flex justify-content-center collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/MEDxSJCET/index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div id="card" class="d-flex justify-content-center">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Patient Updated</h1>
                <?php
                    $uid = $_GET['uid'];
                    include "connection.php";

                    error_reporting(0);
                    session_start();
                
                    $sql = "SELECT * FROM patient WHERE P_id = '$uid'";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
                    echo "<h2 class=\"card-subtitle1\">ID: ". $row["P_id"] ."</h2>";
                    echo "<h2 class=\"card-subtitle2\">NAME: ". $row["P_name"] ."</h2>";
                    echo "<h2 class=\"card-subtitle5\">DISEASE: ". $row["disease"] ."</h2>";
                    echo "<h2 class=\"card-subtitle6\">ROOM NO: ". $row["R_id"] ."</h2>";
                    echo "<h2 class=\"card-subtitle7\">ADMITTED DATE: ". $row["Date_admitted"] ."</h2>";
                ?>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center"><button onclick="doctor_panel()">Back</button></div>
    <script src="../scripts/script.js"></script>
</body>

</html>
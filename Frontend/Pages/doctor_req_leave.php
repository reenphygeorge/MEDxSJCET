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
    <link rel="stylesheet" href="../stylesheets/form.css" />
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
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
            <div class="container-fluid">
                <div class="d-flex justify-content-center collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../../index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <!-- <a class="nav-link" href="contact.html">Contact</a> -->
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Options
                                </a>

                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" onclick="doctor_panel()" style="cursor: pointer;">>
                                            Dashboard</a>
                                    </li>
                                    <li><a class="dropdown-item" onclick="doctor_functions('update')"
                                            style="cursor: pointer;">>
                                            Update Patient</a>
                                    </li>
                                    <li><a class="dropdown-item" onclick="doctor_functions('view')"
                                            style="cursor: pointer;">> View Booked
                                            Patient</a>
                                    </li>
                                    <li><a class="dropdown-item" onclick="doctor_functions('discharge')"
                                            style="cursor: pointer;">> Discharge
                                            Patient</a>
                                    </li>
                                    <li><a class="dropdown-item" onclick="doctor_functions('leave_req')"
                                            style="cursor: pointer;">
                                            > Request Leave</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Content -->
    </div>
    <?php
        include "connection.php";
        error_reporting(0);
        session_start();
        $did = $_GET["id"];

        $sql = "SELECT * FROM doctor WHERE D_id = $did";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        if($row["Leave_Req"] == 0 && $row["On_Leave"] == 0 && $row["Leave_Rejected"] == 0) 
        {
            echo "<h2 class=\"text-center\"> Request Leave </h2>";
            echo"<form method=\"post\" action=\"/MEDxSJCET/Backend/Pages/Doctor/req_leave.php\">";
                echo "<div class=\"row\">";
                    echo"<div class=\"col-lg-12 d-flex justify-content-center\">
                        <input type=\"text\" class=\"form room_form\" placeholder=\"      Leave Date (From)\" name=\"leave_from\"
                            required onclick=\"this.type='date'\"><br>
                    </div>";
                echo "</div>";
                echo "<div class=\"row\">";
                    echo "<div class=\"col-lg-12 d-flex justify-content-center\">
                        <input type=\"text\" class=\"form room_form\" placeholder=\"      Leave Date (To)\" name=\"leave_to\" required
                            onclick=\"this.type='date'\"><br>";
                    echo "</div>";
                echo"</div>";
                echo "<div class=\"row\">";
                    echo "<div class=\"col-lg-12 d-flex justify-content-center\">
                        <input type=\"text\" class=\"form room_form\" placeholder=\"      Leave Reason\" name=\"leave_reason\"
                            required><br>";
                    echo "</div>";
                echo "</div>";
                echo "<div class=\"row mt-5 mb-5\">";
                    echo "<div class=\"col-lg-12 d-flex justify-content-center\">
                        <button class=\"submit\">Submit</button>
                    </div>
                </div>";
            echo "</form>";
        }
        else if($row["On_Leave"] == 1)
        {
            echo "<div id=\"card\" class=\"d-flex justify-content-center\">";
                echo "<div class=\"card\">";
                    echo "<div class=\"card-body\">";
                        echo "<h1 class=\"card-title\">Leave Granted</h1>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
            echo "<div class=\"row\">";
                echo "<div class=\"col-lg-12 d-flex justify-content-center\">";
                    echo "<form method=\"post\" action=\"/MEDxSJCET/Backend/Pages/Doctor/rejoin.php\">";
                        echo "<button name=\"rejoin\" value=".$_GET['id'].">Rejoin</button>";
                    echo "<form>";
                echo "</div>";
                // echo "<div class=\"col-lg-6 d-flex justify-content-start\">";
                //     echo "<button>Back</button>";
                // echo "</div>";
            echo "</div>";
            
        }
        else if($row["Leave_Rejected"] == 1)
        {
            echo "<div id=\"card\" class=\"d-flex justify-content-center\">";
                echo "<div class=\"card\">";
                    echo "<div class=\"card-body\">";
                        echo "<h1 class=\"card-title\">Leave Rejected</h1>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        }
    ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="../scripts/script.js"></script>
</body>

</html>
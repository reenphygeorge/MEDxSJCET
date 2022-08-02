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
                                    <li><a class="dropdown-item" href="/MEDxSJCET/Frontend/Pages/doctor_panel.html">>
                                            Dashboard</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href="/MEDxSJCET/Frontend/Pages/doctor_patient_update.php">>
                                            Update Patient</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href="/MEDxSJCET/Frontend/Pages/doctor_patient_table.php">> View Booked Patient</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href="/MEDxSJCET/Frontend/Pages/discharge_patient.php">> Discharge Patient</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    <h2 class="text-center"> Discharge Patient </h2>
    <form method="post" action="/MEDxSJCET/Backend/Pages/Doctor/discharge.php">
      <table class="d-flex justify-content-center mb-5">
      <tr>
          <td>
            <select class="form room_form" name="pid" required">
            <option disabled selected hidden>Patient ID</option>
            <?php
                include "connection.php";

                error_reporting(0);
                session_start();
                
                $sql = "SELECT * FROM patient WHERE R_id IS NOT NULL";
                $result = mysqli_query($conn, $sql);

                while($row = mysqli_fetch_array($result)) {
                    echo "<option required value=" . $row["P_id"] . ">" . $row["P_id"] . "</option>";
                }
            ?>
          </td>
        </tr>
        <tr>
          <td>
            <input class="form room_form" type="text" placeholder="      Discharge Date" name="dis_date" onfocus="(this.type='date')"  required>
          </td>
        </tr>
      </table>
      <div class="row mt-5 mb-5">
        <div class="col-lg-12 d-flex justify-content-center">
          <button class="submit">Discharge</button>
        </div>
      </div>
    </form>
    <br>
    <br>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>
    <script src="../scripts/script.js"></script>
</body>

</html>
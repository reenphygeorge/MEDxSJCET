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
  <link rel="stylesheet" href="../stylesheets/doctor_table.css" />

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
                  <li><a class="dropdown-item" href="/MEDxSJCET/Frontend/Pages/admin_panel.html">> Dashboard</a></li>
                  <li><a class="dropdown-item" href="/MEDxSJCET/Frontend/Pages/doctor_table.php">> View Doctor</a></li>
                  <li><a class="dropdown-item" href="/MEDxSJCET/Frontend/Pages/doctor_form.html">> Add Doctor</a></li>
                  <li><a class="dropdown-item" href="/MEDxSJCET/Frontend/Pages/doctor_leave_req_view.php">> Leave
                      Requests</a></li>
                  <li><a class="dropdown-item" href="/MEDxSJCET/Frontend/Pages/nurse_table.php">> View Nurse</a></li>
                  <li><a class="dropdown-item" href="/MEDxSJCET/Frontend/Pages/nurse_form.html">> Add Nurse</a></li>
                  <li><a class="dropdown-item" href="/MEDxSJCET/Frontend/Pages/room_table.php">> View Room</a></li>
                  <li><a class="dropdown-item" href="/MEDxSJCET/Frontend/Pages/room_form.html">> Add Room</a></li>
                  <li><a class="dropdown-item" href="/MEDxSJCET/Frontend/Pages/ward_boy_table.php">> View Ward-Boy</a>
                  </li>
                  <li><a class="dropdown-item" href="/MEDxSJCET/Frontend/Pages/wardboy_form.html">> Add Ward-Boy</a>
                  </li>
                  <li><a class="dropdown-item" href="/MEDxSJCET/Frontend/Pages/patient_table.php">> View Patient</a>
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
  </div>

  <h3 class="doctor">Doctor's Details</h3>
  <!-- table details -->

  <div class="table-details mb-5">

    <table class="table">
      <tr>
        <th>DOCTOR ID</th>
        <th>NAME</th>
        <th>PHONE</th>
        <th>SPECIALIZATION</th>
        <th>ADDRESS</th>
        <th>DOB</th>
        <th>GENDER</th>
      </tr>
      <?php
                include "connection.php";

                error_reporting(0);
                session_start();
                
                $sql = "SELECT * FROM doctor";
                $result = mysqli_query($conn, $sql);

                while($row = mysqli_fetch_array($result)) {
                  echo "<tr>";
                  echo "<td>" . $row["D_id"] . "</td>";
                  echo "<td>" . $row["D_Name"] . "</td>";
                  echo "<td>" . $row["Phone_No"] . "</td>";
                  echo "<td>" . $row["Specialization"] . "</td>";
                  echo "<td>" . $row["Address"] . "</td>";
                  echo "<td>" . $row["DOB"] . "</td>";
                  echo "<td>" . $row["Gender"] . "</td>";
                  echo "</tr>";
                }
      ?>
    </table>

  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="../scripts/script.js"></script>
</body>

</html>
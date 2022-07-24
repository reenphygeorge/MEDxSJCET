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

  <h3 class="doctor">DOCTOR's DETAILS</h3>
  <!-- table details -->

  <div class="table-details">

    <table class="table">
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>PHONE</th>
        <th>GENDER</th>
        <th>ADDRESS</th>
        <th>DISEASE</th>
        <th>DOCTOR ID</th>
        <th>ROOM ID</th>
        <th>ADMITTED ON</th>
        <th>DISCHARGED ON</th>
    </tr>
    <?php
        include "connection.php";

        error_reporting(0);
        session_start();
                
        $sql = "SELECT * FROM patient WHERE D_id = ".$_SESSION['doctor_id'];
        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row["P_id"] . "</td>";
            echo "<td>" . $row["P_name"] . "</td>";
            echo "<td>" . $row["P_phone"] . "</td>";
            echo "<td>" . $row["P_gender"] . "</td>";
            echo "<td>" . $row["P_Address"] . "</td>";
            echo "<td>" . $row["disease"] . "</td>";
            echo "<td>" . $row["R_id"] . "</td>";
            echo "<td>" . $row["Date_admitted"] . "</td>";
            echo "<td>" . $row["Date_checkedout"] . "</td>";
            echo "</tr>";
        }
    ?>
    </table>

  </div>
  <div class="back-button">
    <button class="btn-back" onclick="doctor_panel()">BACK</button>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="../scripts/script.js"></script>
</body>

</html>
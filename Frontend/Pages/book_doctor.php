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
                  <li><a class="dropdown-item" href="/MEDxSJCET/Frontend/Pages/receptionist_panel.html">> Dashboard</a>
                  </li>
                  <li><a class="dropdown-item" href="/MEDxSJCET/Frontend/Pages/create_patient.html">> Create Patient</a>
                  </li>
                  <li><a class="dropdown-item" href="/MEDxSJCET/Frontend/Pages/book_doctor.php">> Book Appointment</a>
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

    <h2 class="text-center"> Book Doctor </h2>
    <form method="post" action="/MEDxSJCET/Backend/Pages/Reception/book_patient.php">
      <table class="d-flex justify-content-center">
        <tr>
          <td>
            <input class="form room_form" type="text" placeholder="      Patient ID" name="pid" required>
          </td>
        </tr>
        <tr>
          <td>
            <select class="form room_form" name="did">
            <option disabled selected hidden>Select Doctor</option>
            <?php
                include "connection.php";

                error_reporting(0);
                session_start();
                
                $sql = "SELECT * FROM doctor";
                $result = mysqli_query($conn, $sql);

                while($row = mysqli_fetch_array($result)) {
                    echo "<option value=" . $row["D_id"] . ">" . $row["D_Name"] ." (". $row["start_time"] ." - ". $row["end_time"] .")</option>";
                }
            ?>
          </td>
        </tr>
      </table>
      <div class="row mt-4 mb-5">
        <!-- <div class="col-md-6 d-flex justify-content-end">
          <button class="back" type="button" onclick="receptionist_panel()">Back</button>
        </div> -->
        <div class="col-md-12 d-flex justify-content-center">
          <button class="submit">Submit</button>
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
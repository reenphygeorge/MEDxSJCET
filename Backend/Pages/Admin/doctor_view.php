<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Specialization</th>
            </tr>
        </thead>
        <tbody>

            <?php
                include "connection.php";

                error_reporting(0);
                session_start();
                
                $sql = "SELECT * FROM doctor";
                $result = mysqli_query($conn, $sql);

                while($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<th scope=\"row\">" . $row["D_id"] . "</th>";
                    echo "<td>". $row["D_Name"] . "</td>";
                    echo "<td>" . $row["Specialization"] . "</td>";
                    echo "</tr>";
                }
            ?>

        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
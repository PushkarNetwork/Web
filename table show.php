<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedbacks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body style="margin:43px;">
    <table class="table">
        <thread>
            <tr>
                <th>SN</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Time</th>
                <th>Action</th>
            </tr>
        </thread>

        <tbody>

            <?php

            $hostname = "sql310.epizy.com";
            $username = "epiz_33162900";
            $password = "1EkQjwHm3XWRgdp";
            $dbname = "epiz_33162900_feedbacks";

            $conn = new mysqli($hostname, $username, $password, $dbname);

            if ($conn->connect_error) {
                echo "Connection to db failed: " . $conn->connect_error;
            } else {
                // echo "Connection to DB Success.<br>";
            }
            
            $sql = "SELECT * FROM feedbacks";            
            $results = $conn->query($sql);

            while ($row = $results->fetch_assoc()) {
                echo " <tr>
                        <td>" . $row["SN"] . "</td>
                        <td>" . $row["Name"] . "</td>
                        <td>" . $row["Email"] . "</td>
                        <td>" . $row["Message"] . "</td>
                        <td>" . $row["Time"] . "</td>
                        <td>
                        <a class='btn btn-danger btn-sm' href='delete.php?SN=$row[SN]'> Delete </a>
                        </td>
            </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
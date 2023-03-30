<?php
$id = $_GET["SN"];
// echo "Hello: ".$id;
// credentials
$servername = "sql310.epizy.com";
$username = "epiz_33162900";
$password = "1EkQjwHm3XWRgdp";
$dbname = "epiz_33162900_feedbacks";

// Database Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else{
    // echo"Conmected to db";
}

$sql = "DELETE FROM feedbacks WHERE SN = $id";
if ($conn->query($sql) === TRUE) {
    echo "Success Deletion";
}
?>
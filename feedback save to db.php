<?php

$Name = $_POST["Name"];
$Email = $_POST["Email"];
$Message = $_POST["Message"];

$hostname = "sql310.epizy.com";
$username = "epiz_33162900";
$password = "1EkQjwHm3XWRgdp";
$dbname = "epiz_33162900_feedbacks";

$conn = new mysqli($hostname, $username, $password, $dbname);

if ($conn->connect_error) {
    echo "Connection to db failed: " . $conn->connect_error;
} else {
    echo "Connection to DB Success. <br><br>";
}

$sql = " INSERT INTO feedbacks (Name,Email,Message) VALUES ('$Name','$Email','$Message') ";

if ($conn->query($sql) === TRUE) {
    echo "Form Submitted";
} else {
    echo "Failed: " . $conn->error;
}
?>
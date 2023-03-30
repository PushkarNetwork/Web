<?php
echo "Hello <br><br>";

// credentials
$servername = "localhost";
$username = "root";
$password = "";
// $dbname = "mydb1";  ( nly if the database is already created)

// create connection
$conn = new mysqli($servername, $username, $password);  // 4th will be $dbname if given

//check connection
if ($conn->connect_error) {
    die("Connection failed to db: " . $conn->connect_error);
} else {
    echo "Successfully connected to db server <br><br>";
}

// create database
$sql = "CREATE DATABASE mydb1";

// check database
if ($conn->query($sql) === TRUE) {
    echo "Succeed creating database. <br><br>";
} else {
    echo "failed creating database: " . $conn->error;
}

// select database
$conn->select_db("mydb1");

// create table
$sql = " CREATE TABLE mytable1 ( 
    ID INT(5) AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(16) NOT NULL,
    Address VARCHAR(16) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP)";

// check table
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// any  tasks such as delete, update, add are done using $sql = " " ;

$sql = " INSERT INTO mytable1 (Name,Address) VALUES ('Pushkar','Microsoft Inc.') ";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Data not inserted: " . $conn->error;
}

// close the connection
$conn->close();

?>
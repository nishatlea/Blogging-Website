<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ksp";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE registration (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
password INT(6),
username VARCHAR(30) NOT NULL,
birthday VARCHAR(30) NOT NULL,
gender VARCHAR(10),
email VARCHAR(50),
reg_date TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Table ksp created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
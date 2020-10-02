

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
$a=$_GET["pass"];
$b=$_GET["name"];
$c=$_GET["birth"];
$d=$_GET["gen"];
$e=$_GET["email"];

$sql = "INSERT INTO registration (password, username,birthday,gender, email) VALUES ('$a', '$b', '$c','$d','$e')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
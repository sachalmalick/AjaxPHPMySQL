<?php
$servername = "localhost";
$username = "root";
$password = "sachal99";
$dbname = "hello";

$us_name = $_POST["name"];
$pw = $_POST["password"];
$email = $_POST["email"];

echo $us_name . " ";
echo $pw . " ";
echo $email . " ";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO UserInfo (username, password, email, points)
VALUES (" . "'" . $us_name . "'" . "," . "'" . $pw . "'" . "," . "'" . $email . "'" . ", 0)";


if ($conn->query($sql) === TRUE) {
} else {
    echo "Error updating record: " . $conn->error;
}



$conn->close();

















?>



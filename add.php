<?php
$servername = "localhost";
$username = "root";
$password = "sachal99";
$dbname = "hello";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE numjoined SET numjoin=numjoin+1";

if ($conn->query($sql) === TRUE) {
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
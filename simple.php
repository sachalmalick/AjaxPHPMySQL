<html>

<head>
<title>
Sachal Malick
</title>
</head>
<script>
alert("hi");
</script>
<?php
function printNumJoined() {
$servername = "localhost";
$username = "root";
$password = "sachal99";
$dbname = "hello";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	echo "uh oh";
    die("Connection failed: " . $conn->connect_error);
}
else  {
}

 $sql = "SELECT numjoin FROM numjoined";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "num joined: ". $row["numjoin"]."<br>";
     }
} else {
     echo "0 results";
}

$conn->close();

}
?>

<?php 
printNumJoined();
?>
</body>

 </p> 
</html>
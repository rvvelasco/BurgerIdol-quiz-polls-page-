<?php

$ans=$_POST['optradio'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "burger";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO encuestas (id,sino1)
VALUES (NULL,$ans)";

if ($conn->query($sql) === TRUE) {

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
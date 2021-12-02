<?php
header("Location: http://localhost/encuentapp/pagina2.html ");
$texto=$_POST['nombrecom'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ham";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO pregunta (id,respuesta)
VALUES (NULL,'$texto')";

if ($conn->query($sql) === TRUE) {

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
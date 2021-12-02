<?php

$nombre=$_POST['nombre'];
$codigo=$_POST['codigo'];
$cantidad=$_POST['cantidad'];
$costo=$_POST['costo'];
$factura=$_POST['numeroFac'];
$lote=$_POST['numeroLot'];

echo $nombre, $codigo, $cantidad,$costo,$factura,$lote;

	$servername = "localhost";
	$database = "tienda";
	$username = "root";
	$password = "";

	$conn = mysqli_connect($servername, $username, $password, $database);
	// Check connection
	if ($conn->connect_error) {
	die("No se pudo conectar con la base de datos: " . $conn->connect_error);
	}

	$sql="INSERT INTO productos(id,nombre,codigo,cantidad,costo,factura,lote) VALUES (NULL,'$nombre','$codigo','$cantidad','$costo','$factura','$lote')";

	$result=mysqli_query($conn,$sql);

	mysqli_close($conn);


?>
<?php

include ("Conexion.php");
$nombre = $_POST['Nombre'];
$precio = $_POST['Precio'];

$sql = mysqli_query($con, "INSERT INTO carrito(id_C, Nombre_C, Precio_C) VALUES (0, '$nombre', 'precio')");
header("location:http://localhost/Jonathan/Productos.php");

?>
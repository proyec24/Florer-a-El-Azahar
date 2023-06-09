<?php 

include("Conexion.php");

$id = $_POST['id'];
$sql = mysqli_query($con, "DELETE FROM carrito WHERE id_C='$id'");
header("location:http://localhost/Jonathan/Carrito.php");

?>
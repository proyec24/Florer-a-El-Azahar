<?php
include 'Conexion.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$contrasena = $_POST['contrasena'];
$edad = $_POST['edad'];
$email = $_POST['email'];
$genero = $_POST['genero'];

$sql=mysqli_query($con, "INSERT INTO user (id, nombre, apellidos, contrasena, edad, email, genero, Id_cargo) values (0, '$nombre', '$apellidos', '$contrasena', '$edad', '$email', '$genero', 2)");

if (!$sql)
{
    echo "Conexión No Exitosa";
}
else
{
    echo "Conexión Exitosa";
    header("location: HTML/Inicio.html");
}
?>
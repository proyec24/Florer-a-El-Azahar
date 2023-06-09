<?php
 include("Conexion.php");

$nombre = $_POST["nombre"];
$apellidos = $_POST['apellidos'];
$contrasena = $_POST['contrasena'];
$edad = $_POST['edad'];
$email = $_POST['email'];
$genero = $_POST['genero'];
$cargo = $_POST["cargo"];

 $insertar = "INSERT INTO user (nombre, apellidos, contrasena, edad, email, genero, Id_cargo) values ('$nombre', '$apellidos', '$contrasena', '$edad', '$email', '$genero', '$cargo')";

 $resultado = mysqli_query($con, $insertar);

 if($resultado) {

    header("location: Usuarios.php");

 } else {
    echo "<script>alert('No se pudo registrar');window.history.go(-1);</script";
 }

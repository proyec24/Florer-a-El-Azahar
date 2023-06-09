<?php
 include("Conexion.php");

 $id = $_POST['id'];
 $nombre = $_POST['nombre'];
 $apellido = $_POST['apellidos'];
 $correo = $_POST['email'];
 $contrasena = $_POST['contrasena'];
 $edad = $_POST ['edad'];
 $cargo = $_POST['cargo'];

 $actualizar = "UPDATE user SET nombre='$nombre', apellidos='$apellido', email='$correo', contrasena='$contrasena', edad='$edad', Id_cargo='$cargo' WHERE id='$id'";
 
  $resultado=mysqli_query($con, $actualizar);

 if ($resultado) {
     
    header("location: Usuarios.php");

 } else 
 {

   echo"<script>alert('No se pudo modificar los datos'); window.history.go(-1);</script>";

 }
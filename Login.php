<?php
include 'Conexion.php';

$email = $_POST['email'];
$contrasena = $_POST['contrasena'];

$query = mysqli_query($con, "SELECT * FROM user where email = '".$email."' and contrasena = '".$contrasena."'");

$cont = mysqli_fetch_array($query);

if($cont['Id_cargo']==1)
    {   
        echo "Ingresaste como administrador";
        header("location: Admin.php");
    }
    else
    if($cont['Id_cargo']==2)
    {
        echo "Ingresaste como usuario";
        header("location: Productos.php");
    }
    else
    {
        header("location: /Florería El Azahar/HTML/InicioSesión.html");
    }
?>
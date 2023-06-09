<?php
$server = "localhost";
$database = "floreriaelazahar";
$username = "root";
$contrasena = "admin";

$con = mysqli_connect($server, $username, $contrasena, $database);

if (!$con)
{
    echo "Conexión No Exitosa";
}
else
{
    
}

?>
<?php
include("conexion.php");
$sql = mysqli_query($con, "SELECT * FROM detalles");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilo.css">
    <title>Productos Admin - Florería El Azahar</title>
</head>

<body>
    <header>
        <div class="Navbar">
            <ul class="BarraP">
                <li><a id="Log" href="./Descripcion.html"><img src="./img/Tenki.png" alt="Tenki-Logo"></a></li>
                <li><a href="./Productos.php">Productos</a></li>
                <li><a href="./Ubicacion.html">Ubicacion</a></li>
                <li><a href="./Login.html">Login</a></li>
            </ul>
        </div>
    </header>
    <div>
        <table id="theTable" class="display"
            style=" width: 90%; background-color:azure; margin:auto; margin-top:3%; text-align:center;">
            <thead style="font-size: xx-large;">
                <th>Marca</th>
                <th>Modelo</th>
                <th>Precio</th>
                <th>Fecha</th>
            </thead>
            <form action="aDetalles.php" method="post">
                <tbody style="font-size: x-large;">
                    <?php while ($row = $sql->fetch_assoc()) { ?>
                        <tr>
                            <td>
                                <?php echo $row['Marca_D']; ?>
                            </td>
                            <td>
                                <?php echo $row['Modelo_D']; ?>
                            </td>
                            <td>
                                <?php echo $row['Precio_D']; ?>
                            </td>
                            <td>
                                <?php echo $row['Fecha_D']; ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </form>
        </table>
    </div>
    <footer id = "Pie">
<a href="https://www.facebook.com/"><img src="/Florería El Azahar/img/logo_fb.png" alt="Facebook"></a>
<a href="https://www.instagram.com/"><img src="/Florería El Azahar/img/logo_insta.png" alt="Instagram"></a>
<a href="https://twitter.com/"><img src="/Florería El Azahar/img/logo_twitter.png" alt="Twitter"></a>
<br>
<p>Jair Alberto Tapia Becerra</p>
    </footer>
</body>

</html>
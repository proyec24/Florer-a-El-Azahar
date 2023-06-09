<?php
include("Conexion.php");
$sql = mysqli_query($con, "SELECT * FROM carrito");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unicom</title>
    <link rel="stylesheet" href="EstiloA.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>
<body>

   <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
      </label>
      <ul>
          <li><a href="Admin.php">Inicio</a></li>
          <li><a href="Admin.php">Productos</a></li>
          <li><a href="Usuarios.php">Usuarios</a></li>
          <li><a href="Registro.html">Registro</a></li>
          <li><a href="Login.html">Cerrar Sesion</a></li>
      </ul>
  </nav>




  <div>
        <?php error_reporting(0);
        $buscar = $_REQUEST['buscar'];
        ?>
        <table id="theTable" class="display"
            style=" width: 90%; background-color:azure; margin:auto; margin-top:3%; text-align:center;">
            <thead style="font-size: xx-large;">
                <th>Producto</th>
                <th>Precio</th>
                <th>Opciones</th>
            </thead>
            <a href="Detalles.php">Historial</a>
            <form action="aDetalles.php" method="post">
                <tbody style="font-size: x-large;">
                    <?php while ($row = $sql->fetch_assoc()) { ?>
                        <tr>
                            <td>
                                <?php echo $row['Nombre_C']; ?>
                                <input type="hidden" name="Nombre_C" value="<?php echo $row['Nombre_C']; ?>">
                            </td>
                            <td>
                                <?php echo $row['Precio_C']; ?>
                                <input type="hidden" name="Precio_C" value="<?php echo $row['Precio_C']; ?>">
                            </td>
                            <td><a href="eliminarCarrito.php?id=<?php echo $row["id_C"]; ?>"><img title="Eliminar"
                                        src="http://localhost/PEPE/img/del.png"></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
                <div>
                    <button type="submit" name="registrar" id="registrar">
                        Pagar
                    </button>
                </div>
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
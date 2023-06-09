<?php
include ("Conexion.php");
$productos = mysqli_query($con, "SELECT * FROM productos");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Florería El Azahar</title>
    <link rel="stylesheet" href="/Florería El Azahar/CSS/EstiloA.css">
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
          <li><a href="/Florería El Azahar/HTML/Registro.html">Cerrar Sesion</a></li>
      </ul>
  </nav>

  <div class="container-add">
      <h2 class="container__title">Insertar Producto</h2>
        <form action="aProductos.php" method="POST" class="container__form">
        <label for="" class="container__label">Producto: </label>
        <input class="Regp" placeholder="nombrep" name="nombrep" id="nombrep">
        <label for="" class="container__label"> Precio: </label>
        <input class="Regp" type="number" placeholder="precio" name="precio" id="precio">
        <label for="" class="container__label"> URL Imagen: </label>
        <input class="Regp" placeholder="imagen" name="imagen" id="imagen"> 
            <div>
                <button type="submit" name="registrar" id="registrar">
                    Registrar
                </button>
            </div>
        </form>
    </div>

    <div>
        <?php error_reporting(0);
        $buscar = $_REQUEST['buscar'];
        ?>
        <div style="margin:auto; align-items:center; text-align:center; margin-top:5%;">
            <form action="buscar.php" method="get">
                <input type="text" name="buscar" id="buscar" placeholder="Buscar" value="<?php echo $buscar; ?>">
                <input type="submit" value="Buscar">
            </form>
        </div>

  <table id="thetable" class="dislay" style=" width: 90%; background-color: azure; margin: auto; margin-top: 3%; text-align:center;">
  <thead style="font-size: xx-large;">
    <th>Imagen</th>
    <th>Nombre</th>
    <th>Precio</th>
    <th>Opciones</th>
  </thead>
  <tbody style="font-size: x-large;">
  <?php while ($row = $productos->fetch_assoc()) {  ?>

    <tr>
        <td>
            <img tittle="producto" src="<?php echo $row['imagen']; ?>" style="height: 200px;">
        </ts>
        <td>
            <?php echo $row['nombrep']; ?>
        </td>
        <td>
            <?php echo $row['precio']; ?>
        </td>

        
        <td><a href="editarAdmin.php?id=<?php echo $row["id"]; ?>">Editar</a> |
        
        <a href="elProductos.php?id=<?php echo $row["id"]; ?>">Eliminar</a></td>

    </tr>
    <?php } ?>  
  </tbody>
  </table>

  <footer id = "Pie">
<a href="https://www.facebook.com/"><img src="/Florería El Azahar/img/logo_fb.png" alt="Facebook"></a>
<a href="https://www.instagram.com/"><img src="/Florería El Azahar/img/logo_insta.png" alt="Instagram"></a>
<a href="https://twitter.com/"><img src="/Florería El Azahar/img/logo_twitter.png" alt="Twitter"></a>
<br>
<p>Jair Alberto Tapia Becerra</p>
    </footer>
</body>
</html>
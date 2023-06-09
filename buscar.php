<?php
include("Conexion.php");
$buscar = $_GET['buscar'];
$sql = mysqli_query($con, "SELECT id, nombrep, precio, imagen FROM productos WHERE nombrep like '$buscar' '%' or precio like '$buscar' '%' or imagen like '$buscar' '%' order by id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edicion</title>
    <link rel="stylesheet" href="/Florería El Azahar/CSS/EstiloA.css">
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



  <div class="Admin" style="width: 90%; margin:auto; align-items:center; text-align:center; background-color: rgb(255, 255, 255);">
        <table id="theTable" class="display" style=" width: 90%; background-color:azure; margin:auto; margin-top:3%; text-align:center;">
            <thead style="font-size: xx-large;">
                <th>id</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Imagen</th>
                <th>Opciones</th>
            </thead>
            <tbody style="font-size: x-large;">
                <?php while ($row = $sql->fetch_assoc()) { ?>
                    <tr>
                        <td>
                            <?php echo $row['id']; ?>
                        </td>
                        <td>
                            <?php echo $row['nombrep']; ?>
                        </td>
                        <td>
                            <?php echo $row['precio']; ?>
                        </td>
                        <td>
                          <img  src="<?php echo $row['imagen']; ?>" style="height: 200px;">
                        </td>
                        <td><a href="editarAdmin.php?id=<?php echo $row["id"]; ?>">Editar</a> - <a
                                href="elProductos.php?id=<?php echo $row["id"]; ?>">Eliminar</a></td>
                    </tr>
                <?php } ?>
            </tbody>
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
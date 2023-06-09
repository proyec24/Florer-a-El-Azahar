<?php
 include("Conexion.php");
 $id = $_GET["id"];
 $usuarios = "SELECT * FROM user WHERE id = '$id'";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link rel="stylesheet" href="/Florería El Azahar/CSS/EstiloUsu.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>
<body>

   <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
      </label>
      <ul>
          <li><a href="Admin.html">Inicio</a></li>
          <li><a href="Admin.html">Productos</a></li>
          <li><a href="Usuarios.php">Usuarios</a></li>
          <li><a href="Registro.html">Registro</a></li>
          <li><a href="Login.html">Cerrar Sesion</a></li>
      </ul>
  </nav>

    <form class="container-table--edit-2" action="modifica.php" method="post">

       <div class="table__title--edit-2">Usuarios</div>
       <div class="table__header">Nombre</div>
       <div class="table__header">Apellido</div>
       <div class="table__header">Correo</div>
       <div class="table__header">Edad</div>
       <div class="table__header">Contraseña</div>
       <div class="table__header">Id_Cargo</div>
       <div class="table__header">Operacion</div>

       <?php $resultado = mysqli_query($con, $usuarios);
       while($row=mysqli_fetch_assoc($resultado)) {  ?>
       <input type="hidden" class="table__item" value="<?php echo $row["id"]; ?>" name="id">
       <input type="text" class="table__input" value="<?php echo $row["nombre"]; ?>" name="nombre">
       <input type="text" class="table__input" value="<?php echo $row["apellidos"]; ?>" name="apellidos">
       <input type="text" class="table__input" value="<?php echo $row["email"]; ?>" name="email">
       <input type="text" class="table__input" value="<?php echo $row["edad"]; ?>" name="edad">
       <input type="text" class="table__input" value="<?php echo $row["contrasena"]; ?>" name="contrasena">
       <input type="text" class="table__input" value="<?php echo $row["Id_cargo"]; ?>" name="cargo">
       <?php } mysqli_free_result($resultado); ?>
       <input type="submit" value="Modificar" class="cpntainer__submit container__submit--modificar">

       </form>



       <footer id = "Pie">
<a href="https://www.facebook.com/"><img src="/Florería El Azahar/img/logo_fb.png" alt="Facebook"></a>
<a href="https://www.instagram.com/"><img src="/Florería El Azahar/img/logo_insta.png" alt="Instagram"></a>
<a href="https://twitter.com/"><img src="/Florería El Azahar/img/logo_twitter.png" alt="Twitter"></a>
<br>
<p>Jair Alberto Tapia Becerra</p>
    </footer>
</body>
</html>
<?php
 include("Conexion.php");
 $usuarios = "SELECT * FROM user";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
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
          <li><a href="Admin.php">Inicio</a></li>
          <li><a href="Admin.php">Productos</a></li>
          <li><a href="Usuarios.php">Usuarios</a></li>
          <li><a href="Registro.html">Registro</a></li>
          <li><a href="Login.html">Cerrar Sesion</a></li>
      </ul>
  </nav>

    <div class="container-add">
        <h2 class="container__title">Registrar Usuario</h2>
        <form action="insertar.php" method="post" class="container__form">
           <label for="" class="container__label">Nombre:</label>
           <input name="nombre" type="text" class="container__input">
           <label for="" class="container__label">Apellido:</label>
           <input name="apellidos" type="text" class="container__input">
           <label for="" class="container__label">Correo:</label>
           <input name="email" type="text" class="container__input">
           <label for="" class="container__label">Edad:</label>
           <input name="edad" type="text" class="container__input">
           <label for="" class="container__label">Contraseña:</label>
           <input name="contrasena" type="text" class="container__input">
           <label for="" class="container__label">Id_cargo:</label>
           <input name="cargo" type="text" class="container__input">
           <input class="container__submit" type="submit" value="Registrar">
        </form>
    </div>

    <div class="container-table">

       <div class="table__title">Usuarios <a href="edicion.php" class="title_edit">Editar</a></div>
       <div class="table__header">Nombre</div>
       <div class="table__header">Apellidos</div>
       <div class="table__header">Correo</div>
       <div class="table__header">Edad</div>
       <div class="table__header">Contraseña</div>
       <div class="table__header">Id_Cargo</div>
     
       <?php $resultado = mysqli_query($con, $usuarios);
       while($row=mysqli_fetch_assoc($resultado)) {  ?>
       <div class="table__item"><?php echo $row["nombre"]; ?> </div>
       <div class="table__item"><?php echo $row["apellidos"];  ?> </div>
       <div class="table__item"><?php echo $row["email"];   ?> </div>
       <div class="table__item"><?php echo $row["edad"];  ?> </div>
       <div class="table__item"><?php echo $row["contrasena"];  ?> </div>
       <div class="table__item"><?php echo $row["Id_cargo"];  ?> </div>
       <?php } mysqli_free_result($resultado); ?>

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

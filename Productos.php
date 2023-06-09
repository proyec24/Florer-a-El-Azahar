<?php
include("Conexion.php");
$sql = mysqli_query($con, "SELECT id, nombrep, precio, imagen FROM productos WHERE 1");
$resultado = mysqli_fetch_all($sql, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edicion</title>
    <link rel="stylesheet" href="/Florería El Azahar/CSS/estiloPro.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>

      <body>

      <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
      </label>
      <ul>
          <li><a href="/Florería El Azahar/HTML/Inicio.html">Inicio</a></li>
          <li><a href="/Florería El Azahar/Productos.php">Productos</a></li>
          <li><a href="/Florería El Azahar/HTML/Ubicacion.html">Ubicacion</a></li>
          <li><a href="Login.html">Cerrar Sesion</a></li>
      </ul>
     </nav>

    <section class="products">
		<h2>Productos</h2>
		<div class="all-products">
        <?php
        foreach ($resultado as $row) {
            ?>
                   <?php
                    $id = $row['id'];
                    $imagen = $row['imagen'];
                    if (empty($imagen)) {
                        $imagen = "img/productos/no-img.jpg";
                    }
                    ?>
			<div class="product">
            <a><img src="<?php echo $imagen; ?>"></a>
				<div class="product-info">
					<h4 class="product-title">
                        <?php echo $row["nombrep"]; ?>
					</h4>
					<p class="product-price">
                    <span class="precio">$
                            <?php echo $row["precio"]; ?>
                        </span>
                        <input type="hidden" name="precio" value="<?php echo $row['precio']; ?>">
                    </p>
					<a class="product-btn" href="#">Buy Now</a>

				</div>
			</div>
            <?php
        }
        ?>
        </div>
        <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
     </section>

     <footer id = "Pie">
<a href="https://www.facebook.com/"><img src="/Florería El Azahar/img/logo_fb.png" alt="Facebook"></a>
<a href="https://www.instagram.com/"><img src="/Florería El Azahar/img/logo_insta.png" alt="Instagram"></a>
<a href="https://twitter.com/"><img src="/Florería El Azahar/img/logo_twitter.png" alt="Twitter"></a>
<br>
<p>Jair Alberto Tapia Becerra</p>
    </footer>
</body>
</html>
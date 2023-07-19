


<!DOCTYPE html>
<html>
<head>
	<title>Ventas - SSMC</title>
	<link rel="stylesheet" type="text/css" href="assets/css/estilos2.css">
  <link rel="stylesheet" type="text/css" href="assets/css/estilos3.css">
  <link rel="stylesheet" type="text/css" href="assets/css/estilos.css">
</head>
<body>
	<header>
            <div class="logo">
              <h1>SSMC</h1>
                  <nav>
      <ul>
        <li><a href="home.html">INICIO</a></li>
        <li><a href="add_prod.php">AGREGAR PRODUCTOS</a></li>
        <li><a href="list_prod.php">LISTA DE PRODUCTOS</a></li>
      </ul>
    </nav>
            </div>

	</header>
  <?php
session_start();

// Verificar si hay una variable de sesión para los productos
if (!isset($_SESSION['productos'])) {
  $_SESSION['productos'] = array();
}

// Agregar un producto a la lista
if (isset($_POST["codigo"])) {
  $codigo = $_POST["codigo"];
  
  include("dbconnect.php");
  $sql = "SELECT * FROM ssmc_prods WHERE id_prod='$codigo'";
  $result = mysqli_query($conn, $sql);
  
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $producto = array(
        "nombre" => $row["nombre_prod"],
        "precio" => $row["precio_prod"]
      );
      $_SESSION['productos'][] = $producto;
    }
  }
}

// Eliminar un producto de la lista
if (isset($_POST["eliminar"])) {
  $index = $_POST["index"];
  if (isset($_SESSION['productos'][$index])) {
    unset($_SESSION['productos'][$index]);
  }
  $_SESSION['productos'] = array_values($_SESSION['productos']); // Reindexar el array
}

// Cerrar la venta
if (isset($_POST["cerrar_venta"])) {
  include("dbconnect.php");
  
  foreach ($_SESSION['productos'] as $producto) {
    // Actualizar la cantidad de productos en la base de datos
    $nombre = $producto["nombre"];
    $sql = "UPDATE ssmc_prods SET cant_prod = cant_prod - 1 WHERE nombre_prod = '$nombre'";
    mysqli_query($conn, $sql);
  }
  
  // Limpiar la lista de productos y mostrar un mensaje de venta realizada
  $_SESSION['productos'] = array();
  echo "<p>Venta realizada con éxito.</p>";
}
?>

<main>
  <form action="#" method="post">
    <label for="codigo">Codigo:</label>
    <input type="text" name="codigo" placeholder="Ingrese el codigo del articulo">
    <input type="submit" name="enviar" value="Agregar">
  </form>

  <?php if (!empty($_SESSION['productos'])): ?>
    <ul>
      <?php $total = 0; ?>
      <?php foreach ($_SESSION['productos'] as $index => $producto): ?>
        <li>
          <?php echo $producto["nombre"]; ?> - <?php echo $producto["precio"]; ?>
          <form action="#" method="post" style="display: inline;">
            <input type="hidden" name="index" value="<?php echo $index; ?>">
            <input type="submit" name="eliminar" value="Eliminar">
          </form>
        </li>
        <?php $total += $producto["precio"]; ?>
      <?php endforeach; ?>
    </ul>
    <p>Total: <?php echo $total; ?></p>
    <form action="#" method="post">
      <input type="submit" name="cerrar_venta" value="Cerrar Venta">
      <input type="submit" name="limpiar" value="Limpiar lista">
    </form>
  <?php endif; ?>
</main>

  <footer>
    <p>© SSMC 2023 - Todos los derechos reservados</p>
    <p>Calle de la Tecnología 123, Ciudad Tecnológica, Tecnolandia</p>
  </footer>
</body>
</html>

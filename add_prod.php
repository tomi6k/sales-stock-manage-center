<?php 
if(isset($_GET['status'])) {
  if($_GET['status'] == 'success') {
    echo "<p>Guardado correctamente</p>";
  } else {
    echo "<p>Hubo un error.</p>";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Agregar Producto - SSMC</title>
	<link rel="stylesheet" type="text/css" href="assets/css/estilos2.css">
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
    <br>
<form method="POST" action="save_prod.php">
	<h2>Agregar Producto</h2>
 <!--	<div class="form-group">
		<label for="id-producto">ID Producto:</label>
		<input type="text" id="id-producto" name="id-producto" required>
	</div> -->
	<div class="form-group">
		<label for="nombre">Nombre:</label>
		<input type="text" id="nombre" name="nombre" required>
	</div>
	<div class="form-group">
		<label for="cantidad">Cantidad:</label>
		<input type="number" id="cantidad" name="cantidad" required>
	</div>
	<div class="form-group">
		<label for="precio">Precio:</label>
		<input type="text" id="nompreciobre" name="precio" required>
	</div>
	<div class="form-group">
		<label for="stock-minimo">Stock Mínimo:</label>
		<input type="number" id="stock-minimo" name="stock-minimo" required>
	</div>
	<div class="form-group">
		<label for="codigo-barras">Código de Barras:</label>
		<input type="text" id="codigo-barras" name="codigo-barras" required>
	</div>
	<div class="form-group">
		<label for="fecha-vencimiento">Fecha de Vencimiento:</label>
		<input type="date" id="fecha-vencimiento" name="fecha-vencimiento" required>
	</div>
	<input type="submit" value="Agregar">
</form>
<br>
<footer>
		<p>© SSMC 2023 - Todos los derechos reservados</p>
		<p>Calle de la Tecnología 123, Ciudad Tecnológica, Tecnolandia</p>
	</footer>
</body>
</html>

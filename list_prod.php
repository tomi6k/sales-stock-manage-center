<!DOCTYPE html>
<html>
<head>
	<title>Inicio de Sesión - SSMC</title>
	<link rel="stylesheet" type="text/css" href="assets/css/estilos3.css">
</head>
<body>
	<header>
            <div class="logo">
              <h1>SSMC</h1>
			  <style> 
			 nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: flex-end;
  align-items: center;
}

nav li {
  margin: 0 10px;
}

nav a {
  color: #fff;
  text-decoration: none;
  font-size: 16px;
  font-weight: bold;
  padding: 5px;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

nav a:hover {
  background-color: #fff;
  color: #444;
} 
			  </style>
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
  
  <?php
    include "dbconnect.php";

    $sql = "SELECT * FROM ssmc_prods";
    $result = mysqli_query($conn, $sql);

    // Imprimir la tabla HTML
    echo '<div class="table-container">';
    echo '<div class="table">';
    echo '<div class="row header">';
    echo '<div class="column">';
    echo '<h3>ID</h3>';
    echo '</div>';
    echo '<div class="column">';
    echo '<h3>Artículo</h3>';
    echo '</div>';
    echo '<div class="column">';
    echo '<h3>Cantidad</h3>';
    echo '</div>';
    echo '<div class="column">';
    echo '<h3>Precio</h3>';
    echo '</div>';
    echo '</div>';

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="row">';
        echo '<div class="column">';
        echo '<p>' . $row['id_prod'] . '</p>';
        echo '</div>';
        echo '<div class="column">';
        echo '<p>' . $row['nombre_prod'] . '</p>';
        echo '</div>';
        echo '<div class="column">';
        echo '<p>' . $row['cant_prod'] . '</p>';
        echo '</div>';
        echo '<div class="column">';
        echo '<p>' . $row['precio_prod'] . '</p>';
        echo '</div>';
        echo '</div>';
    }

    echo '</div>';
    echo '</div>';
?>



<br>
<footer>
		<p>© SSMC 2023 - Todos los derechos reservados</p>
		<p>Calle de la Tecnología 123, Ciudad Tecnológica, Tecnolandia</p>
	</footer>
</body>
</html>
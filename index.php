<!DOCTYPE html>
<html>
<head>
	<title>Inicio de Sesión - SSMC</title>
	<link rel="stylesheet" type="text/css" href="assets/css/estilos.css">
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


	</header>
	<main>
		<form action="val_login.php" method="post">
			<label for="usuario">Usuario:</label>
			<input type="text" id="usuario" name="usuario" required>
			<label for="contrasena">Contraseña:</label>
			<input type="password" id="contrasena" name="contrasena" required>
			<input type="submit" value="Iniciar Sesión">
		</form>
	</main>
	<footer>
		<p>© SSMC 2023 - Todos los derechos reservados</p>
		<p>Calle de la Tecnología 123, Ciudad Tecnológica, Tecnolandia</p>
	</footer>
</body>
</html>

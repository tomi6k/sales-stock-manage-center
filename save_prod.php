<?php 
include "dbconnect.php";

$nombre_prod = $_POST["nombre"];
$cantidad_prod = $_POST["cantidad"];
$stock_min = $_POST["stock-minimo"]; 
$codigo_barra = $_POST['codigo-barras'];
$fecha_venc = $_POST['fecha-vencimiento'];

$sql = "INSERT INTO ssmc_prods ( nombre_prod, cant_prod, cod_barras, fecha_vencimiento) VALUES ( '$nombre_prod', $cantidad_prod, '$codigo_barra', '$fecha_venc')";
$query = mysqli_query($conn, $sql);
	if($query){
	    header("Location: add_prod.php?status=success");
	} else {
	    echo("Location: add_prod.php?status=error");
	}

?>
<?php
$servername = "localhost";
$database = "ssmc_db";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("No se conecto". mysqli_connect_error());
} 

#echo "Conectado correctamente";


?>
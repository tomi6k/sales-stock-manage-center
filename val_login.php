<?php
include "dbconnect.php";

$usuario = $_POST["usuario"];
$password = $_POST["contrasena"];

$sql="SELECT * FROM `ssmc_user` WHERE name_user = '$usuario' and pass_user = '$password'";
$result=mysqli_query($conn, $sql);

$filas=mysqli_num_rows($result);
    if($filas>0) {
    header("location:home.html");
}
else
    header("location:login-error.html");

?>
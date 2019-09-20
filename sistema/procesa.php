<?php
require("conexion.php");

$usuario=$_POST["user"];
$contrasenia=$_POST["pass"];
$cedula1=$_POST["cedula"];


$sql="insert into administrador (CEDULA,USER,PW) values ('$cedula','$usuario','$contrasenia')";
$res=mysqli_query($sql, $con);

?>

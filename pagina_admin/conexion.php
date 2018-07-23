<?php 	


$host="localhost";
$usuario2="root";
$contraseña2="";
$base="salones";

$conexion =new mysqli( $host, $usuario2,$contraseña2, $base);

mysqli_set_charset($conexion,"utf8");


if( $conexion->  connect_errno){


die("fallo la conexion: (".$conexion -> mysqli_connect_errno().")".$conexion->mysqli_connect_error());

}

?>
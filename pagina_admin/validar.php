<?php

$usuario=$_POST['usuario'];
$contrasena=$_POST['pass'];


include ("conexion.php");


$consulta="SELECT *FROM usuario where usuario='$usuario' and clave ='$contrasena' ";

$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas>0){
   
    /*$_SESSION['u_usuario']=$usuario;*/
   header("location:actualizar.php");
    

}

else{
 echo "<div class='error'> Clave o Usuario Incorrecto</div>";
} 

mysqli_close($conexion);


?>
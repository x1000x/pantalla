<?php

////////////////// CONEXION A LA BASE DE DATOS ////////////////////////////////////

$host="localhost";
$usuario="root";
$contraseña="";
$base="itic";

$conexion= new mysqli($host, $usuario, $contraseña, $base);
if ($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
}

/////////////////////// CONSULTA A LA BASE DE DATOS ////////////////////////

$alumnos="SELECT * FROM alumnos";
$resAlumnos=$conexion->query($alumnos);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos2.css">

    <title>Hotel WyndamGarden</title>
  </head>
  <body>

    <div class="container">
    <h1 class="display-5">Información de salones de eventos </h1>
       <form action="">
        <table class="table table-bordered table-dark text-center">
  <thead>
   
   
   
   
    <tr>
      <th scope="col"  >id</th>     
      <th scope="col" >Salones </th>
      <th scope="col"  >Eventos</th>
      <th scope="col"  >piso</th>
      
    </tr>
  </thead>
  <tbody>

				<?php

				while ($registroAlumnos = $resAlumnos->fetch_array(MYSQLI_BOTH))

				{

					echo'<tr>

						<td hidden><input name="idalu[]" value="'.$registroAlumnos['id_alumno'].'" /></td>
                        
                         <td>'.$registroAlumnos['id_alumno'].'</td>
						
						 <td><input name="nom['.$registroAlumnos['id_alumno'].']" value="'.$registroAlumnos['nombre'].'" /></td>
						 <td><input name="carr['.$registroAlumnos['id_alumno'].']" value="'.$registroAlumnos['carrera'].'" /></td>
						 <td><input name="gru['.$registroAlumnos['id_alumno'].']" value="'.$registroAlumnos['grupo'].'"/></td>
						 </tr>';
				}


				?>

			</table>
			<input type="submit" name="actualizar" value="Actualizar Registros" class="btn btn-info col-md-offset-9" />
		</form>

		<?php

			if(isset($_POST['actualizar']))
			{
				foreach ($_POST['idalu'] as $ids) 
				{
					$editID=mysqli_real_escape_string($conexion, $_POST['idalu2'][$ids]);
					$editNom=mysqli_real_escape_string($conexion, $_POST['nom'][$ids]);
					$editCarr=mysqli_real_escape_string($conexion, $_POST['carr'][$ids]);
					$editGru=mysqli_real_escape_string($conexion, $_POST['gru'][$ids]);

					$actualizar=$conexion->query("UPDATE alumnos SET id_alumno='$editID', nombre='$editNom', carrera='$editCarr',
																		grupo='$editGru' WHERE id_alumno='$ids'");
				}

				if($actualizar==true)
				{
					echo "FUNCIONA! <a href='prueba.php'>CLICK AQUÍ</a>";
				}

				else
				{
					echo "NO FUNIONA!";
				}
			}

		?>



	   </div>
    
    
    
    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>



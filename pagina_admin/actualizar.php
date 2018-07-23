<?php


include ("conexion.php");

$salones="SELECT * FROM salones";
$resalones=$conexion-> query($salones);


?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="cssi/bootstrap.min.css">
    <link rel="stylesheet" href="cssi/estilos2.css">

    <title>Hotel WyndamGarden</title>
  </head>
  <body>

    <div class="container">
    <h1 class="display-5">Información de salones de eventos </h1>
       <form method="post">
        <table class="table table-bordered table-dark text-center">
  <thead>
   
   
   
   
    <tr>
      <!--<th scope="col"  >id</th> -->    
      <th scope="col" >Salones </th>
      <th scope="col"  >Eventos</th>
      <th scope="col"  >piso</th>
      
    </tr>
  </thead>
  <tbody>
   
<?php

				while ($registrosalones = $resalones->fetch_array(MYSQLI_BOTH))

				{

					echo'<tr>

						
                        <td hidden><input name="idalu[]" value="'.$registrosalones['id'].'" /></td>
                             
						 
						 <td>'.$registrosalones['nombre'].'</td>
						 <td><input name="evet['.$registrosalones['id'].']" value="'.$registrosalones['evento'].'" /></td>
                         <td>'.$registrosalones['piso'].'</td>
					
						 </tr>';
                
				}


				?>

  </tbody>
</table> 
      
      <input type="submit" name="actualizar" value="Actualizar Registros" class="btn btn-info col-md-offset-9" />
      <a href="salir.php"> <input type="button" name="cerrar_sesion" value="cerrar sesion" class="btn btn-info col-md-offset-9" /> </a>
       </form>
       
       

<?php
        
			if(isset($_POST['actualizar']))
			{

				foreach ($_POST['idalu'] as $ids) 
				{
                    
					
					$editeven=mysqli_real_escape_string($conexion, $_POST['evet'][$ids]);
	

					$actualizar=$conexion->query("UPDATE salones SET evento='$editeven' WHERE id='$ids'");
				};
               
               

				if($actualizar===true)
				{
					$ok="ok";
				}

				else
				{
                    die("problema de acceso a datos".mysql_error());
					$ok="";
				}
                
                if ($ok=="ok")  {
                    
             echo "<script type= 'text/javascript'>alert ('Los eventos se han actualizado exitosamente!!!'); </script>";
             echo "<script type= 'text/javascript'>window.location.href='salonestv.php';</script>";}
                    
        /*            echo "<script language='javascript'> 
alert('Actualizado Correctamente'); 
location.reload();
</script> ";}*/
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
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
    <link rel="stylesheet" href="cssi/bootstrap.css">
    <link rel="stylesheet" href="cssi/estilos3.css">

    <title>Hotel WyndamGarden</title>
  </head>
  <body>
   <div class="container-fluid ">
  
    
    <div class="titulo"><h1 class="display-3">Centro de Eventos Wyndham Garden</h1> </div>
    
    </div>
    
    
    
      
      <div class="cuerpo d-flex justify-content-between">
      
        <div class="izquierda">
       <div class="logo" >
       
     <img class="img" src="imgi/logowg.jpg" alt="">
    
    </div>
    
    <div class="banner">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block w-100" src="imgi/foto-banner-bienvenida.jpg" data-src="holder.js/900x400?theme=social" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imgi/foto-banner-bar.jpg" data-src="holder.js/900x400?theme=industrial" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imgi/foto-banner-centro-eventos.jpg" data-src="holder.js/900x400?theme=industrial" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imgi/foto-banner-oferta-tarifas.jpg" data-src="holder.js/900x400?theme=industrial" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imgi/foto-banner-restaurant.jpg" data-src="holder.js/900x400?theme=industrial" alt="Second slide">
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
   
      <div class="text-center">
      <h4> <p> CENTRO DE EVENTOS: </p>
<p> San Martín 343, Concepción </p>
<p> Fono (56-41) 224 00 78 – 224 97 48</p></h4>
    <h3>www.wyndhamgardenconcepcion.cl</h3>
        </div>
        
    <div class="fecha" >
     <script>
var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
var f=new Date();
document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
</script>
        
    </div>
    </div>
       
       <div class="derecha">
        
         <table class="table table-bordered text-center" >
  <thead class="bg-success">
    <tr>
     
      <th scope="col"  >Salón </th>
      <th scope="col"   >Eventos</th>
      <th scope="col"   >Piso</th>
      
    </tr>
  </thead>
  <tbody>
  
   
<?php

while ($registroeventos = $resalones->fetch_array(MYSQLI_BOTH)){


	echo'<tr  > 

			<td>'.$registroeventos['nombre'].'</td>
			<td>'.$registroeventos['evento'].'</td>
			<td>'.$registroeventos['piso'].'</td>

		</tr>';
}



?>
  

  </tbody>
</table> 
</div>           
</div>
  
   
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
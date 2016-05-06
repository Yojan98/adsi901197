<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reto tiempo</title>
</head>
<body>
	<h1>Reto tiempo</h1>
	<hr>
	<form action="" method="post">
		<fieldset>
			<legend><h4>FECHA DE NACIMIENTO</h4></legend>
			<input type="number" min="1" max="31" name="dia" placeholder="Día"><br><br>
			<input type="number" min="1" max="12" name="mes"  placeholder="Mes"><br><br>
			<input type="number" min="1" name="año"  placeholder="Año"><br><br>
			<input type="submit" value="Calcular">
		</fieldset>
	</form>
	<?php

 if(isset($_POST['mes'])){//Comprobamos si está disponible la variable mes
 	
  //fecha de nacimiento
 	$dia = $_POST['dia'];
  $mes = $_POST['mes']; //almacenamos en variables
  $año = $_POST['año'];
  
  //hoy
  $diaAC=date("j");
  $mesAC=date("n");
  $añoAC=date("Y");

  //si el mes es el mismo pero el día inferior aun no ha cumplido años, le quitaremos un año al actual
  
  if (($mes == $mesAC) && ($dia > $diaAC)) {
  	$anoAC=($añoAC-1); }
  	
  //si el mes es superior al actual tampoco habrá cumplido años, por eso le quitamos un año al actual
  	
  	if ($mes > $mesAC) {
  		$añoAC=($añoAC-1);}
  		
  //ya no habría mas condiciones, ahora simplemente restamos los años y mostramos el resultado como su edad
  		
  		$edad=($añoAC-$año);
  		
  		echo "Tiene ".$edad." años";
  	}
  	?>
  </body>
  </hGET
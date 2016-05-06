<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Filtros (PHP)</title>
</head>
<body>
	<h1>Filtros (PHP)</h1>
	<hr>
	<?php 
		$variable = 400;
		$opciones = array(
			"options"=>array
			(
				"min_range"=>0,
				"max_range"=>256
				)
			);
		$numero = 123;
		if(!filter_var($numero, FILTER_VALIDATE_INT)) {
			echo "<h4>No es un número entero | Debe ser mayor a 0 y menor de 256!</h4>";
		} else {
			echo "<h4>Es un número entero entre 0 y 256!</h4>";
		}
	 ?>
</body>
</html>
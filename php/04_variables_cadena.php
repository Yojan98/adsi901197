<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Variables tipo cadena (PHP)</title>
</head>
<body>
	<h1>Variables tipo cadena (PHP)</h1>
	<hr>

	<?php 

	$cadena1 = "Bienvenidos";
	$cadena2 = "ADSI 901197";

	$concatenar = "<h2>".$cadena1." ".$cadena2."</h2>";
	echo $concatenar;

	// Logitud  de cadena
	echo "La longitud de la cadena es ".strlen($concatenar);

	// Posición de caracteres
	echo "<br>La posición de la palabra ADSI es:".strpos($concatenar, "ADSI");

	// Minusculas
	echo "<br> La cadena en minusculas: ".strtolower("Bienvenidos ADSI 901197");

	// Mayusculas
	echo "<br> La cadena en mayusculas: ".strtoupper("Bienvenidos ADSI 901197");

	// Revertir cadena
	echo "<br> Revertir la cadena : ".strrev("Bienvenidos ADSI 901197");

	// Reemplazar
	echo "<br> La cadena reemplazada es: ".str_replace("ADSI", "SEAN", "Bienvenidos 901197");

	// Intercambiar caracteres
	echo "<br> La cadena intercambaida es: ".str_shuffle("Bienvenidos ADSI 901197");

	 ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vectores numericos (PHP)</title>
</head>
<body>
	<h1>Vectores Numericos (PHP)</h1>
	<hr>

	<?php 
	 //Indice automatico

	$frutas = array('Manzana', 'Pera', 'Tomate', 'Fresa', 'Sandia' );

	// Indice Manual

	$frutas[5] = 'Papaya';
	$frutas[6] = 'Guayaba';
	$frutas[7] = 'Mango';
	$frutas[8] = 'Curuba';
	$frutas[9] = 'Mandarina';

	// Mostrar en una lista las frutas
	echo var_dump($frutas);

	 ?>
</body>
</html>
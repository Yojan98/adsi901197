<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Excepciones (PHP)</title>
</head>
<body>
	<h1>Excepciones (PHP)</h1>
	<hr>
	
	<?php
	function verificarNum($numero) {
		if($numero > 1) {
			throw new Exception("El número debe ser 1 o menor");
		}
		return true;
	}
	try {
		verificarNum(2);
		echo "Si usted ve esto, el numero es 1 o menor";
	}
	catch(Exception $e) {
		echo "Mensaje: ".$e->getMessage();
	}
	?>
</body>
</html>
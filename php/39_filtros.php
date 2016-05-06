<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Filtros (PHP)</title>
</head>
<body>
	<h1>Filtros (PHP)</h1>
	<hr>
	<form method="post" action="">
	<fieldset>
	<legend><h4>DATOS</h4></legend>
	<input type="text" name="email" placeholder="Correo Electronico">
	<br>
	<input type="text" name="url" placeholder="Dirección de internet">
	<br>
	<input type="submit" value="Verificar">
</fieldset>
	<?php
	if ($_POST) {
		
		if(!filter_has_var(INPUT_POST, "email")) {
		echo "El Campo Correo Electrónico no Existe";
	}
	else {
		
		if(!filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)) {
			echo "El Correo Electrónico ".$_POST['email']." no es valido";
		}
		else {
			echo "El Correo Electrónico ".$_POST['email']." es valido";
		}
	}
	echo "<br><br>";
	// Validar URL
	if(!filter_has_var(INPUT_POST, "url")) {
		echo "El Campo URL no Existe";
	}
	else {
		if (!filter_input(INPUT_POST, "url", FILTER_VALIDATE_URL)){
			echo "La ruta de internet".$_POST['url']." no es valida!";
	} else {
		echo "La ruta de internet ".$_POST['url']." es valida!";
	}
	
}
}


	?>

</body>
</html>
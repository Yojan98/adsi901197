<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario Método GET (PHP)</title>
</head>
<body>
	<h1>Formulario Método GET (PHP)</h1>
	<hr>
	<form action="" method="post">
		<fieldset>
			<legend><h4>Datos Personales</h4></legend>
			<input type="text" name="nombre" placeholder="Nombre completo">
			<br>
			<input type="number" name="edad" placeholder="Edad">
			<br>
			<input type="submit" value="Enviar por Post">
		</fieldset>
	</form>


	<?php 
	if (isset($_REQUEST['nombre']) && isset($_REQUEST['edad'])) {
		
	
	echo "<li> El nombre es : ".$_REQUEST['nombre']."</li>";

	echo "<li> La edad es : ".$_REQUEST['edad']."</li>";
}

	 ?>
</body>
</html>
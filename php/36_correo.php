<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Correo (PHP)</title>
</head>
<body>
	<h1>Correo (PHP)</h1>
	<hr>

	<form method="post" action="36_correo.php">
	<strong>Correo:<br></strong><input type="text" name="email"><br>
	<strong>Asunto:<br></strong><input type="text" name="asunto"><br>
	<strong>Mensaje:<br></strong><textarea name="mensaje"></textarea><br>
		<input type="submit" value="Enviar">
		
	</form>
	<?php
	if(isset($_REQUEST["email"])) {
		$email = $_REQUEST["email"];
		$asunto = $_REQUEST["asunto"];
		$mensaje = $_REQUEST["mensaje"];
		}

		if(mail("yojan65622@hotmail.com”, “Asunto: $asunto", $mensaje, "De: $email"));
		
			echo "Gracias, El Correo fue enviado."
	

	?>
</body>
</html>
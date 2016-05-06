<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Condicional IF (PHP)</title>
</head>
<body>
	<h1>Condicional IF (PHP)</h1>
	<hr>

	<?php
	$dia = date("D");
	if($dia == "Wed")
		echo "Tenga una buena semana!";
	?>
</body>
</html>
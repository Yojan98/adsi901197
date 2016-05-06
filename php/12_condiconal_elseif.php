<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Condicional ELSE (PHP)</title>
</head>
<body>
	<h1>Condicional ELSE (PHP)</h1>
	<hr>
	
	
	<?php
	$dia = date("D");
	if($dia == "Fri")
		echo "Tenga un buen fin de semana!";
	elseif($dia == "Wed")
		echo "Tenga un buen Miercoles!";
	else
		echo "Tenga un buen día!";
	?>
	
</body>
</html>
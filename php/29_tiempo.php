<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tiempo (PHP)</title>
</head>
<body>
	<h1>Tiempo (PHP)</h1>
	<hr>

	<?php 

	$tiempo = mktime(0, 0, 0, dat('m'), date ('d')+1, date('Y') );
	echo date('r', $tiempo);

	 ?>
</body>
</html>
<?php 

setcookie('visitante', 'Yojan Gutierrez', time()+120);

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cookies (PHP)</title>
</head>
<body>
	<h1>Cookies (PHP)</h1>
	<hr>
	<?php

	if (isset($_COOKIE['visitante'])) {
	 	echo "<h3>Bienvenido: ".$_COOKIE['visitante']."</h3>";
	  } else {
	  	echo "<h3> Bienvenidos</h3>";
	  } 
	 ?>
</body>
</html>
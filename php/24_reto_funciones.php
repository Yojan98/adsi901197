<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reto funciones (PHP) - Graficar tablas</title>
	<style>
		body {
			font: 14px Tahoma;
			background-color: #0254FB;
		}
		table {
			border-collapse: collapse;
			margin: 40px auto;
			background-color: #027AF5;
			width: 90%;
		}
		table td {
			border: thin dotted black;
			padding: 10px;
			

		}



	</style>
</head>
<body>
	<h1>Reto funciones (PHP) - Graficar tablas</h1>
	<hr>
	<?php 

	function graficarTabla($nf, $nc) {
		echo "<table border=1>";
		for ($i=0; $i <= $nf ; $i++) { 
			echo "<tr>";
			for ($j=0; $j <= $nc ; $j++) { 
				echo "<td> x </td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}
	echo graficarTabla(5, 10);
	 ?>
</body>
</html>
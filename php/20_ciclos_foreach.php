<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ciclos While (PHP)</title>
</head>
<body>
	<h1>Ciclos While (PHP)</h1>
	<hr>
	<?php  
	$motos =  array('AKT', 'HONDA', 'PULSAR', 'RTX', 'AVEO', 'CR5',
					'RX', 'DT', 'BOXER', 'LIBERO' );

	foreach ($motos as $x) {
		echo (" Las motos mas distinguidas en manizales y colombia son: ". $x)."<br>";
	}
	?>
</body>
</html>
	
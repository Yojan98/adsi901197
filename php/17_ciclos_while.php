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
	$num=0; 

	while ($num<=100) { 
		if (($num % 2) == 0) {
			echo $num; 

		}
		
		if ($num<=99)  { 
			echo "<br>";
		} 
		$num++;
	}
		?>
</body>
</html>
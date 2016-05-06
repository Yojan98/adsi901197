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
	$num = 0;
	do {
		if (($num%2) !=0)  { 
			echo "<br>".$num;
		} 
		$num++;
	}
	while ($num<=99);
	?>
</body>
</html>
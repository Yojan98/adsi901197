<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vectores Asociativos (PHP)</title>
</head>
<body>
	<h1>Vectores Asociativos (PHP)</h1>
	<hr>
	 <?php 

	 $dragon = array('Bardock' => 68, 'Goku' => 45, 'Milk' => 40, 'Gohan' => 29, 'Goten' => 15);
	 $dragon['Mr Popo']  = 58 ;
	 $dragon['kamisama'] = 105;

	 // mostrar el arreglo
	print var_dump($dragon);



	  ?>
</body>
</html>
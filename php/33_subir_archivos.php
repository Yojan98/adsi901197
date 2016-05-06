<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Subir archivos (PHP)</title>
</head>
<body>
	<h1>Subir archivos (PHP)</h1>
	<hr>

	<form enctype="multipart/form-data"  method="post">
		<label for="foto">
			Seleccione foto:
		</label>	
		<input type="file" id="foto" name="foto" accept="image/*">
		<br>	
		<input type="submit" name="Subir foto" >
			
		
	</form>
	

	<?php
		
		if ($_FILES) {

			if ($_FILES['foto']['type'] == 'image/png' && $_FILES['foto']['size'] < 2000000) {

				if ($_FILES['foto']['error'] > 0) {
					echo "<h4>Error al subir el archivo: ".$_FILES['foto']['error']."</h4>";
				 } else {
				 	echo "<li> Nombre Archivo: ".$_FILES['foto']['name']."</li>";
				 	echo "<li> Tipo Archivo: ".$_FILES['foto']['type']."</li>";
				 	echo "<li> Tamaño Archivo: ".(round($_FILES['foto']['name'] / 1024))."</li>";
				 	echo "<li><img src='subir/".$_FILES['foto']['name']."'></li>";

				 	if (file_exists('subir/'.$_FILES['foto']['name'])) {
				 		echo "<h4>La foto ya existe!</h4>";
				 	} else {
				 		move_uploaded_file($_FILES['foto']['tmp_name'], 'subir/'.$_FILES['foto']['name']);
				 	}
				 }
			} else {
				echo "<h4>La foto es Incorrecta!</h4>";
			}
		}
	?>
</body>
</html>
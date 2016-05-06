<?php 

if (isset($_GET['marca'])) {
	$marca = $_GET['marca'];
	if($marca == 1){
		echo "<option>Once caldas</option>";
		echo "<option>Atletico Nacional</option>";
		echo "<option>Real Cartagena</option>";
	}
	else if ($marca == 2) {
		echo "<option>Flamengo</option>";
		echo "<option>Santos laguna</option>";
		echo "<option>Sao Paulo </option>";
	}
	else if ($marca == 3) {
		echo "<option>River Plate</option>";
		echo "<option>Boca juniors</option>";
		echo "<option>Banfield</option>";
	}
}

?>
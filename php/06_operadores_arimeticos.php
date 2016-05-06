<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Operadores Aritmeticos PHP</title>
	<style>
		body{
			text-align: center;
		}
		table{
			border: 0px solid #0094FC;
			color: #000;
			height: 200px;
			width: 400px;
			cursor: pointer;
			border-collapse: collapse;
			margin-left: 500px;
		}

		td {
			border: 1px solid black;
			height: 50px;
			width: 100px;
		}
		#s1 {
			background-color: #4A7D9D;
		}
		#s2 {
			background-color: #3AA0BA;
		}

	</style>
</head>
<body>
	<h1>Operadores Aritmeticos PHP</h1>
	<hr>

	<table>
		<tr>
			<td id="s1"><strong>Operador</strong></td>
			<td id="s1"><strong>Descripción</strong></td>
			<td id="s1"><strong>Ejemplo</strong></td>
			<td id="s1"><strong>Resultado</strong></td>
		</tr>

		<tr>
			<?php 
			$X = 2;  
			?>
			<td id="s2">+</td>
			<td id="s2">Adición</td>
			<td id="s2">X=2 <br> X+2 </td>
			<td id="s2">
				<?php echo $X+2; ?>
			</td>
		</tr>

		<tr>
			<?php 
			$X = 2;  
			?>
			<td id="s2">-</td>
			<td id="s2">Substracción</td>
			<td id="s2">X=2 <br> 5-X</td>
			<td id="s2">
				<?php echo 5-$X; ?>
			</td>
		</tr>

		<tr>

			<?php 
			$X = 4;  
			?>
			<td id="s2">*</td>
			<td id="s2">Producto</td>
			<td id="s2">X=4 <br> X*5 </td>
			<td id="s2">
				<?php echo $X*5; ?>
			</td>
		</tr>

		<tr>
			<?php 
			$X = 2;  
			?>
			<td id="s2">/</td>
			<td id="s2">Division</td>
			<td id="s2">15/5</td>
			<td id="s2">
				<?php echo 15/5; ?>
			</td>
		</tr>

		<tr>
			<?php 
			$X = 2;  
			?>
			<td id="s2">%</td>
			<td id="s2">Residuo</td>
			<td id="s2">5%2</td>
			<td id="s2">
				<?php echo 5%2; ?>
			</td>
		</tr>

		<tr>
			<?php 
			$X = 5;  
			?>
			<td id="s2">++</td>
			<td id="s2">Incremento</td>
			<td id="s2">X=5 <br> X++</td>
			<td id="s2">
				<?php echo $X++; ?>
			</td>
		</tr>

		<tr>
			<?php 
			$X = 5;  
			?>
			<td id="s2">--</td>
			<td id="s2">Decremento</td>
			<td id="s2">X=5 <br> X-- </td>
			<td id="s2">
				<?php echo --$X; ?>
			</td>
		</tr>
	</table>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Resultado 11</title>
<meta charset="utf-8">
	<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<script src="../../assets/js/ie-emulation-modes-warning.js"></script>
</head>
<body>
	<center>
		<h1>Edwin de Leon - Baco A</h1>
		<h2>Resultado Ejercicio 11</h2>
		<h3>Ciclos</h3>
		<br>
		<br>
			<?php 
				$n1=$_POST['TxtPrimero'];
				$n2=$_POST['TxtSegundo'];
				if ($n1==$n2) {
					echo "$n1<br>";
					echo "son iguales los datos ingresados";					
				}elseif ($n1>$n2) {
					for ($i=$n2; $i <=$n1; $i++) { 
						echo "$i<br>";
					}
				}else{
					for ($i=$n1; $i <=$n2 ; $i++) { 
						echo "$i<br>";
					}

				}
			 ?>
		<br>
		<br>
		<h1><a class="btn btn-danger" href="index.php">regresar</a></h1>
	</center>
</body>
</html>
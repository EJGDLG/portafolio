<!DOCTYPE html>
<html>
<head>
	<title>Resultado Ejercicio 09</title>
	<meta charset="utf-8">
	<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<script src="../../assets/js/ie-emulation-modes-warning.js"></script>
</head>
<body>
	<center>
		<h1>Fernando Estrada - BACO A</h1>
		<h2>Resultado del Ejercicio 09</h2>
		<h3>Condiciones</h3>
		<br>
		<br>
		<?php 
			$n=$_POST['txtn1'];
			$x=$n%2;
			echo "el residuo es:".$x."<br>";

			if ($x==0) {
				echo "El número ".$n." es par";
			}else{
				echo "El número ".$n." es impar";
			}

		 ?>
		
			
		<br>
		<br>
		<h1><a class="btn btn-danger" href="index.php">Regresar</a></h1>
	</center>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
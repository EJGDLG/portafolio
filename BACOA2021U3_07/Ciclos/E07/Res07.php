<!DOCTYPE html>
<html>
<head>
	<title>Resultado 7</title>
<meta charset="utf-8">
	<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<script src="../../assets/js/ie-emulation-modes-warning.js"></script>
</head>
<body>
	<center>
		<h1>Edwin de Leon - Baco A</h1>
		<h2>Resultado Ejercicio 07</h2>
		<h3>Ciclos</h3>
		<br>
		<br>
		<?php 
			$n=$_POST['TxtN'];
			for ($i=1; $i <=10 ; $i++) { 
				echo $i."*".$n."=".$i*$n."<br>";
			}
		 ?>
		<br>
		<br>
		<h1><a class="btn btn-danger" href="index.php">regresar</a></h1>
	</center>

</body>
</html>
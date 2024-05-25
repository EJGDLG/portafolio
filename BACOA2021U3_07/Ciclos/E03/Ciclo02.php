<!DOCTYPE html>
<html>
<head>
	<title>Ciclos 02 - Edwin</title>
	<meta charset="utf-8">
	<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<script src="../../assets/js/ie-emulation-modes-warning.js"></script>
</head>
<body>
	<center>
		<h1>Ciclos - Fernando</h1>
		<h2>5 BACO A</h2>
		<h3>Resultado - Ejercicio 3</h3>
		<br>
		<br>
		<?php 
		$n1=$_POST['txtN1'];
		$n2=$_POST['txtN2'];  
		for ($i=$n1; $i <=$n2 ; $i++){
			echo $i;
			echo "<br>";
	}
		?>
		<br>
		<br>
		<a class="btn btn-danger" href="index.php">Regresar</a>
	</center>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
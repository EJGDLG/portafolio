<!DOCTYPE html>
<html>
<head>
	<title>Resultado condiciones 5</title>
<meta charset="utf-8">
	<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<script src="../../assets/js/ie-emulation-modes-warning.js"></script>
</head>
<body>
	<center>
		<h1>Edwin de Leon - Baco A</h1>
		<h2>Resultado del Ejercicio 05</h2>
		<br>
		<br>
		<?php 
			$n=$_POST['txtN1'];
			if ($n>0) {
				echo "El valor Ingresado es positivo";
				}elseif ($n<0) {
					echo "El valor Ingresado Es negativo";
				}else{
					echo " El valor Ingresado Es cero";
				}
				

		 ?>
		<br>
		<br>
		<h1><a class="btn btn-danger" href="index.php">regresar</a></h1>
	</center>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>
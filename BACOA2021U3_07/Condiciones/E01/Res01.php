<!DOCTYPE html>
<html>
<head>
	<title>Resultado 01</title>
</head>
<body>
	<meta charset="utf-8">
	<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<script src="../../assets/js/ie-emulation-modes-warning.js"></script>
</head>
<body>
	<center>
		<h1>Edwin de Leon - Baco A</h1>
		<h2>Resultado del Ejercicio 01</h2>
		<?php 
			$n1=$_POST['txtN1'];
			$n2=$_POST['txtN2'];
			$opciones=$_POST['optopciones'];
			if ($opciones==0) {
				$resultado=$n1+$n2;
			}else{
				$resultado=$n1-$n2;

			}
		 ?>
		 <h1>
		 	<?php echo "El total obenido es: ".$resultado; ?>
		 </h1>
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
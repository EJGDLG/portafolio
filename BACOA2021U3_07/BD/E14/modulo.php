<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <title>Módulo para la Conexión - Edwin De Leon</title>
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    <link href="carousel.css" rel="stylesheet">
</head>
<body>
	<center>
		<h1>Este es el módulo de la</h1>
		<h1>Conexión a la BD</h1>
		<?php
			$z=mysqli_connect("localhost","root","","bdedwin5a2021");
			if (!$z) {
				echo "No conectó";
			}else{
				echo "Bd Conectada";
			}
	 	?>
	 	<br>
	 <a href="../../index.html" class="btn btn-danger">Regresar</a>
	</center>
	

</body>
</html>
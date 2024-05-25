<!DOCTYPE html>
<html>
<head>
	<title></title>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <title>Módulo para la Conexión - Edwin de Leon</title>
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    <link href="carousel.css" rel="stylesheet">
</head>
<body>
	<center>
		<h1>Edwin de Leon - 5BACO "A"</h1>
		<h2>Eliminar</h2>
		<h3>Departamento</h3>
				
				<?php 
				include("modulo.php");
					$codigo=$_POST['txtcodigodepto'];
					$eliminar="DELETE FROM DEPARTAMENTO WHERE CODIGODEPTO=".$codigo."";
					$ejecutar=mysqli_query($z,$eliminar);
					if (!$ejecutar) {
						echo "datos no  eliminados";
					}else{
						echo "datos eliminados";
					}
				 ?>
		<br>
		<br>

		<a href="../../index.html" class="btn btn-danger">Regresar</a>
</body>
</html>
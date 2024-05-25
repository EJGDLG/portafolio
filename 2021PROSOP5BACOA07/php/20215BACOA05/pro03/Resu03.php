<!DOCTYPE html>
<html>
<head>
	<title>Resultado pro03</title>
	<meta charset="utf-8">
	<meta charset="utf-8">
	<link href="../../Recursos/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../Recursos/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<script src="../../Recursos/assets/js/ie-emulation-modes-warning.js"></script>
</head>
<body>
	<center>
		<h1>Resultado problma 3</h1>

		<?php 
			$cantH=$_POST['TxtH'];
			$totalM=$cantH*60;
			$totalS=$cantH*3600;
		 ?>
		 <table>
		 	<tr>
		 		<td>Conversion de Minutos:</td>
		 		<td>
		 			<?php echo $totalM.'min' ; ?>
		 		</td>
		 	</tr>
		 	<tr>
		 		<td>Conversion de Segundos:</td>
		 		<td>
		 			<?php echo $totalS.'seg' ; ?>
		 		</td>
		 	</tr>
		 </table>
		 <br>
		 <br>

		<a class="btn btn-danger" href="index.php">Regresar</a>	
	</center>
</body>
</html>
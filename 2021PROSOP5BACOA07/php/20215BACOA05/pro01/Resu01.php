<!DOCTYPE html>
<html>
<head>
	<title>Resultado pro01</title>
	<meta charset="utf-8">
	<meta charset="utf-8">
	<link href="../../Recursos/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../Recursos/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<script src="../../Recursos/assets/js/ie-emulation-modes-warning.js"></script>
</head>
<body>
	<center>
		<h1>Resultado problema 1</h1>

		<?php 
			$cantH=$_POST['TxtH'];
			$cantM=$_POST['TxtM'];
			$total=$cantH+$cantM;
			$pormH=($cantH*100)/$total;
			$pormM=($cantM*100)/$total;
		 ?>
		 <table>
		 	<tr>
		 		<td>Porcentaje de hombres</td>
		 		<td>
		 			<?php echo $pormH ; ?>
		 		</td>
		 	</tr>
		 	<tr>
		 		<td>Porcentaje de Mujeres</td>
		 		<td>
		 			<?php echo $pormM ; ?>
		 		</td>
		 	</tr>
		 </table>

		<a class="btn btn-danger" href="index.php">Regresar</a>	
	</center>
</body>
</html>
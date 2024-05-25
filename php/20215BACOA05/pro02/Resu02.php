<!DOCTYPE html>
<html>
<head>
	<title>Resultado pro02</title>
	<meta charset="utf-8">
	<meta charset="utf-8">
	<link href="../../Recursos/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../Recursos/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<script src="../../Recursos/assets/js/ie-emulation-modes-warning.js"></script>
</head>
<body>
	<center>
		<h1>Resultado problema 2</h1>

		<?php 
			$cantTB=$_POST['TxtTB'];
			$totalGB=$cantTB*1024;
			$totalMB=$cantTB*2048;
			$totalKB=$cantTB*3072;
		 ?>
		 <table>
		 	<tr>
		 		<td>Cantidad de GB:</td>
		 		<td>
		 			<?php echo $totalGB ; ?>
		 		</td>
		 	</tr>
		 	<tr>
		 		<td>Cantidad de MB:</td>
		 		<td>
		 			<?php echo $totalMB ; ?>
		 		</td>
		 	</tr>
		 	<tr>
		 		<td>Cantidad de KB:</td>
		 		<td>
		 			<?php echo $totalKB ; ?>
		 		</td>
		 	</tr>
		 </table>
		 <br>
		 <br>

		<a class="btn btn-danger" href="index.php">Regresar</a>	
	</center>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Resultado pro04</title>
	<meta charset="utf-8">
	<meta charset="utf-8">
	<link href="../../Recursos/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../Recursos/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<script src="../../Recursos/assets/js/ie-emulation-modes-warning.js"></script>
</head>
<body>
	<center>
		<h1>Resultado problma 4</h1>

		<?php 
			$cantNO=$_POST['TxtNO'];
			$cantN=$_POST['TxtN'];
			$cantA=$_POST['TxtA'];
			$totalM= $cantA-$cantN;
		 ?>
		 <table>
		 	<tr>
		 		<td><?php echo $cantNO.' tiene la edad de:' ?></td>
		 		<td>
		 			<?php echo $totalM ; ?>
		 		</td>
		 	</tr>
		 </table>
		 <br>
		 <br>

		<a class="btn btn-danger" href="index.php">Regresar</a>	
	</center>

</body>
</html>
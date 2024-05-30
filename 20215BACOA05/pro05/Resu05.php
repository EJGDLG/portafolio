<!DOCTYPE html>
<html>
<head>
	<title>Resultado pro05</title>
	<meta charset="utf-8">
	<meta charset="utf-8">
	<link href="../../Recursos/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../Recursos/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<script src="../../Recursos/assets/js/ie-emulation-modes-warning.js"></script>
</head>
<body>
	<center>
		<h1>Resultado problma 5</h1>

		<?php 
			$cantN1=$_POST['TxtN1'];
			$cantN2=$_POST['TxtN2'];
			$cantN3=$_POST['TxtN3'];
			$cantN4=$_POST['TxtN4'];
			$cantN5=$_POST['TxtN5'];
			$cantN6=$_POST['TxtN6'];
			$cantN7=$_POST['TxtN7'];
			$cantN8=$_POST['TxtN8'];
			$cantN9=$_POST['TxtN9'];
			$cantN10=$_POST['TxtN10'];
			$cantN11=$_POST['TxtN11'];
			$cantN12=$_POST['TxtN12'];
			$cantN13=$_POST['TxtN13'];
			$cantN14=$_POST['TxtN14'];
			$totalM= ($cantN1+$cantN2+$cantN3+$cantN4+$cantN5+$cantN6+$cantN7+$cantN8+$cantN9+$cantN10+$cantN11+$cantN12+$cantN13+$cantN14)/14;
		 ?>
		 <table>
		 	<tr>
		 		<td>El promedio la la primera unidad es:</td>
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
<!DOCTYPE html>
<html>
<head>
	<title>Resultado 7</title>
<meta charset="utf-8">
	<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<script src="../../assets/js/ie-emulation-modes-warning.js"></script>
</head>
<body>
	<center>
		<h1>Edwin de Leon - Baco A</h1>
		<h2>Resultado Ejercicio 08</h2>
		<h3>Ciclos</h3>
		<br>
		<br>
			<?php 
				$nom=$_POST['TxtNombre'];
				$ape=$_POST['TxtApellido'];
				$suel=$_POST['TxtSueldo'];
				$a=$_POST['rdbAumento'];
				if ($a==1) {
					$aume=$suel*0.1;
				}elseif ($a==2) {
					$aume=$suel*0.15;
				}else{
					$aume=$suel*0.20;
				}
				$total=$suel+$aume;

			 ?>
			 <table>
			 	<tr>
			 		<td width="80">Empleado:</td>
			 		<td><?php echo "$nom &nbsp $ape"; ?></td>
			 	</tr>
			 	<tr>
			 		<td>Sueldo A:</td>
			 		<td><?php echo "$suel"; ?></td>
			 	</tr>
			 	<tr>
			 		<td>Aumento:</td>
			 		<td><?php echo "$aume"; ?></td>
			 	</tr>
			 	<tr>
			 		<td>Nuevo Sueldo:</td>
			 		<td><?php echo "$total"; ?></td>
			 	</tr>
			 </table>
		<br>
		<br>
		<h1><a class="btn btn-danger" href="index.php">regresar</a></h1>
	</center>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Resultado Division</title>
</head>
<body>
	<center>
		<h1>Resultado de la Division</h1>
		<h2>Edwin De Leon  - 5BACO A</h2>
		<hr size="10" color="Skyblue">
		<br>
		<br>
		<?php 
			$n1=$_POST['txtN1'];
			$n2=$_POST['txtN2'];
			$divi=$n1/$n2;
			echo "El total obtenido es:".$divi;
		 ?>
		 <h1>
		 	<a href="frmDivi.php">Regresar</a>
		 </h1>
	</center>
</body>
</html>
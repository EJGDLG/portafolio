<!DOCTYPE html>
<html>
<head>
	<title>REsultado Resta</title>
</head>
<body>
	<center>
		<h1>Resultado de la Resta</h1>
		<h2>Edwin De Leon  - 5BACO A</h2>
		<hr size="10" color="Skyblue">
		<br>
		<br>
		<?php 
			$n1=$_POST['txtN1'];
			$n2=$_POST['txtN2'];
			$n3=$_POST['txtN3'];
			$n4=$_POST['txtN4'];
			$resta=$n4-$n2-$n3-$n1;
			echo "El total obtenido es:".$resta;
		 ?>
		 <h1>
		 	<a href="frmResta.php">Regresar</a>
		 </h1>
	</center>
</body>
</html>
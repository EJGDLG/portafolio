<!DOCTYPE html>
<html>
<head>
	<title>Resultado Multiplicacion</title>
</head>
<body>
	<center>
		<h1>Resultado de la Multiplicacion</h1>
		<h2>Edwin De Leon  - 5BACO A</h2>
		<hr size="10" color="Skyblue">
		<br>
		<br>
		<?php 
			$n1=$_POST['txtN1'];
			$n2=$_POST['txtN2'];
			$n3=$_POST['txtN3'];
			$multi=$n1*$n2;
			$multipli=$n3*$n1;
			$multiplica=$n2*$n3;
			echo "El total obtenido es:".$multi;
			echo "<br>";
			echo "El total obtenido es:".$multipli;
			echo "<br>";
			echo "El total obtenido es:".$multiplica;
		 ?>
		 <h1>
		 	<a href="FrmMulti.php">Regresar</a>
		 </h1>
	</center>
</body>
</html>
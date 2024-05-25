<!DOCTYPE html>
<html>
<head>
	<title>OperacionesPHP</title>
	<meta charset="utf-8">
</head>
<body>
	<center>
		<h1>Operaciones- PHP</h1>
		<h2>Edwin De Leon</h2>
	</center>
	<?php 
		echo "Numero 1: 25";
		echo "<br>";
		echo "Numero 2: 75";
		echo "<br>";
		echo "25+75=";
		echo 25+75;
	 ?>
	 <h3>Forma 02</h3>

	 <?php 
	 	$n1=25;
	 	$n2=75;
	 	echo "Numero 1: 25";
		echo "<br>";
		echo "Numero 2: 75";
		echo "<br>";
		echo "25+75=";		
		echo $n1+$n2;
	  ?>
	   <h3>Forma 03</h3>
	 <?php 
	 	$n1=85;
	 	$n2=33;
	 	echo "Numero 1:".$n1;
		echo "<br>";
		echo "Numero 2:".$n2;
		echo "<br>";
		//echo "25+75=";	
		//echo $n1+$n2;
		$suma=$n1+$n2;
		echo $n1."+".$n2."=".$suma;
	  ?>
	  <br>
	  <br>
	  <center>
			<a class="btn btn-primary" href="../../index.html">Regresar</a>	
	</center>
	<br>
	<br>
	<br>
	<center>
			<a class="btn btn-primary" href="../../pag4/index.html">Regresar Pagina PHP</a>	
	</center>
</body>
</html>
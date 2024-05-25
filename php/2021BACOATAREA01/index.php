<!DOCTYPE html>
<html>
<head>
	<title>Tarea01</title>
</head>
<body>
	<center>
		<h1>Edwin Jose Gabriel de Leon Garcia</h1>
		<h2>Tarea 01 </h2>
	</center>
		<hr>
		<br>
		<h2>Multiplicar</h2>
	 <h3>Forma 1</h3>
	<?php 
		$n1=25;
		$n2=30;
		$n3=35;
		$n4=45;
		$n5=50;
		echo "Numero 1: ".$n1 ;
		echo "<br>";
		echo "Numero 2: ".$n2 ;
		echo "<br>";
		echo "Numero 3: ".$n3 ;
		echo "<br>";
		echo "Numero 4: ".$n4 ;
		echo "<br>";
		echo "Numero 5: ".$n5 ;
		echo "<br>";
		$multi=$n1*$n2*$n3*$n4*$n5;
		echo $n1."*".$n2."*".$n3."*".$n4."*".$n5."=".$multi;		
	 ?>
	  <br>
	  <h3>Forma 2</h3>
	  <br>
	<?php 
		echo "<table border='1'>";
		echo "<tr>";
		echo "<td>";
		$n1=25;
		$n2=30;
		$n3=35;
		$n4=45;
		$n5=50;
		echo "Numero 1: ".$n1 ;
		echo "<br>";
		echo "Numero 2: ".$n2 ;
		echo "<br>";
		echo "Numero 3: ".$n3 ;
		echo "<br>";
		echo "Numero 4: ".$n4 ;
		echo "<br>";
		echo "Numero 5: ".$n5 ;
		echo "<br>";
		$multi=$n1*$n2*$n3*$n4*$n5;
		echo $n1."*".$n2."*".$n3."*".$n4."*".$n5."=".$multi;		
		echo "</td>";
		echo "</tr>";
		echo "</table>";
	 ?>
	 <br>
	 <br>
	 <hr> 
	 <h2>Area de un Cuadrado</h2>
	 <h3>Forma 1</h3>
	 <br>
	 <?php 
	 	echo "<table border='1'>";
		echo "<tr>";
		echo "<td>";
		$n1=7;
		$n2=7;
		$n3=7;
		$n4=7;
		echo "Lado 1: ".$n1 ;
		echo "<br>";
		echo "lado 2: ".$n2 ;
		echo "<br>";
		echo "lado 3: ".$n3 ;
		echo "<br>";
		echo "lado 4: ".$n4 ;
		echo "<br>";
		$multi=$n1+$n2+$n3+$n4;
		echo $n1."+".$n2."+".$n3."+".$n4."=".$multi;		
		echo "</td>";
		echo "</tr>";
		echo "</table>";
	  ?>
	  <br>
	  <h3>Forma 2</h3>
	  <br>
	  <?php 
	 	echo "<table border='1'>";
		echo "<tr>";
		echo "<td>";
		$n1=7;
		$n2=4;
		echo "lado 1: ".$n1 ;
		echo "<br>";
		echo "los 4 lados: ".$n2 ;
		echo "<br>";
		$multi=$n1*$n2;
		echo $n1."*".$n2."=".$multi;		
		echo "</td>";
		echo "</tr>";
		echo "</table>";
	  ?>
	  <br>
	 <br>
	 <hr>
	 <h2>Area de Rectangulo</h2>
	 <h3>Forma 1</h3>
	 <br>
	 <?php 
	 	echo "<table border='1'>";
		echo "<tr>";
		echo "<td>";
		$n1=7;
		$n2=4;
		echo "BASE: ".$n1 ;
		echo "<br>";
		echo "ALTURA: ".$n2 ;
		echo "<br>";
		$multi=$n1*$n2;
		echo $n1."*".$n2."=".$multi;		
		echo "</td>";
		echo "</tr>";
		echo "</table>";
	  ?>
	  <br>
	  <h3>Forma 2</h3>
	  <br>
	  <?php 
		$n1=7;
		$n2=4;
		echo "BASE: ".$n1 ;
		echo "<br>";
		echo "ALTURA: ".$n2 ;
		echo "<br>";
		$multi=$n1*$n2;
		echo $n1."*".$n2."=".$multi;		
	  ?>
<br>
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
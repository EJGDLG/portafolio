<!DOCTYPE html>
<html>
<head>
	<title>Resultado Ejercicio 10</title>
	<meta charset="utf-8">
	<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<script src="../../assets/js/ie-emulation-modes-warning.js"></script>
</head>
<body>
	<center>
		<h1>Fernando Estrada - BACO A</h1>
		<h2>Resultado del Ejercicio 10</h2>
		<h3>Ciclos</h3>
		<br>
		<br>
		<?php 
			$n=$_POST['txtn'];
		 ?>
		 <table border="1">
		 	<?php
		 		for ($i=1; $i <=$n ; $i++) { 
		 			echo "<tr>";
		 				echo '<td width="25" align="center">';
		 					echo $n;
		 				echo "</td>";
		 			echo "</tr>";

		 			//echo '<tr><td width="25" align="center">'.$n.'</td></tr>';
		 		}
		 	 ?>

		 </table>

			
		<br>
		<br>
		<h1><a class="btn btn-danger" href="index.php">Regresar</a></h1>
	</center>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
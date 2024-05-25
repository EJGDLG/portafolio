<!DOCTYPE html>
<html>
<head>
	<title>Resultado 12</title>
<meta charset="utf-8">
	<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<script src="../../assets/js/ie-emulation-modes-warning.js"></script>
</head>
<body>
	<center>
		<h1>Edwin de Leon - Baco A</h1>
		<h2>Resultado Ejercicio 12</h2>
		<h3>Ciclos</h3>
		<br>
		<br>
		<?php 
		$n1=$_POST['TxtPrimero'];

		 ?>
		 <table>
		 	<?php 
		 	for ($i=1; $i <=$n1; $i++) { 
		 		if ($i%2==0) {
		 			echo "<tr>";
		 			echo '<td bgcolor="blue">';
		 			echo $n1;
		 			echo "</td>";
		 			echo '<td bgcolor="blue">';
		 			echo $n1;
		 			echo "</td>";
		 			echo '<td bgcolor="blue">';
		 			echo $n1;
		 			echo "</td>";
		 			echo "<tr>";

		 		}else{
		 			echo "<tr>";
		 			echo '<td bgcolor="red">';
		 			echo $n1;
		 			echo "</td>";
		 			echo '<td bgcolor="red">';
		 			echo $n1;
		 			echo "</td>";
		 			echo '<td bgcolor="red">';
		 			echo $n1;
		 			echo "</td>";
		 			echo "<tr>";
		 		}
		 	}
		 	 ?>
		 </table>
		<br>
		<br>
		<h1><a class="btn btn-danger" href="index.php">regresar</a></h1>
	</center>

</body>
</html>
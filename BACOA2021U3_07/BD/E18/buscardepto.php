<!DOCTYPE html>
<html>
<head>
	<title></title>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <title>Módulo para la Conexión - Edwin de Leon</title>
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    <link href="carousel.css" rel="stylesheet">
</head>
<body>
	<center>
		<h1>Edwin de Leon - 5BACO "A"</h1>
		<h2>Eliminar</h2>
		<h3>Departamento</h3>
				
				<?php 
				include("modulo.php");
					$codigo=$_POST['txtcodigodepto'];
					$buscar = "SELECT * FROM DEPARTAMENTO WHERE CODIGODEPTO=".$codigo."";
					$ejecutar =mysqli_query($z,$buscar);
					while ($leer=mysqli_fetch_array($ejecutar)) {
						echo "El codigo es:" .$leer[0]."<br>";
						echo "El nombre es:" .$leer[1];
					}
				 ?>
		<br>
		<br>
		<?php 
		$buscar2 = "	SELECT * FROM DEPARTAMENTO";
			$ejecutar2=mysqli_query($z,$buscar2);
			//while ($leer2=mysqli_fetch_array($ejecutar2)) {
				//echo $leer2[0];
				//echo $leer2[1];
				//echo "<br>";		
				//}
		?>
		<h4>Listas de Departamento</h4>
		<table border="1">
			<thead>
				<tr>
					<th width="50">Codigo</th>
					<th width="150">departamento</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				while ($leer2=mysqli_fetch_array($ejecutar2)) {
				echo "<tr>";
					echo "<td>".$leer2[0]."</td>";
					echo "<td>".$leer2[1]."</td>";
				echo "<tr>";			
			}	
				 ?>
			</tbody>
		</table>
		<br>
		<br>


		<a href="../../index.html" class="btn btn-danger">Regresar</a>
</body>
</html>
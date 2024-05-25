<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 6</title>
<meta charset="utf-8">
	<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<script src="../../assets/js/ie-emulation-modes-warning.js"></script>
</head>
<body>
	<center>
		<h1>Edwin de Leon - Baco A</h1>
		<h2>Ejercicio 06</h2>
		<h3>Ciclos</h3>
		<h4>Elabora un formulario que permite ingresar un numero y muestre<br>. En otra pagina si el numero es postivo,  negativo o cero</h4>
		<br>
		<br>
		<form method="POST" name="frme06" action="Res06.php">
			<table >
				<tr>
					<td>Dia</td>
					<td>Mes</td>
					<td>Año</td>
				</tr>	
				<tr>
					<td>
						<select name="cmdDia">
							<?php 
								for ($i=1; $i <31 ; $i++) { 
									echo '<option value="'.$i.'">'.$i.'</option>';
								}
							 ?>
							
						</select>
					</td>
					<td>
						<select name="cmdMes">
							<?php 
								for ($i=1; $i <12 ; $i++) { 
									echo '<option value="'.$i.'">'.$i.'</option>';
								}
							 ?>
						</select>
					</td>
					<td>
						<select name="cmdAño">
							<?php 
								for ($i=2010; $i <2021 ; $i++) { 
									echo '<option value="'.$i.'">'.$i.'</option>';
								}
							 ?>
						</select>
					</td>
				</tr>				
				<tr>
					<td colspan="3" align="center">
						<input  class="btn btn-primary" type="submit" name="btnEnviar" value="Enviar">
						<input  class="btn btn-primary" type="reset" name="btnLimpiar" value="Limpiar">
					</td>
				</tr>
			</table>
		</form>
		<br>
		<br>
		<h1><a class="btn btn-danger" href="../../index.html">regresar</a></h1>
	</center>

</body>
</html>
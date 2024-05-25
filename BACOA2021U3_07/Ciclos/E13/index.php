<!DOCTYPE html>
<html>
<head>
<title>Ejercicio 13</title>
<meta charset="utf-8">
	<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<script src="../../assets/js/ie-emulation-modes-warning.js"></script>
</head>
<body>
	<center>
		<h1>Edwin de Leon - Baco A</h1>
		<h2>Ejercicio 13</h2>
		<h3>Ciclos</h3>
		<h4>Elabora un formulario que permita ingresar el nombre</h4>
		<h4>apellido, sueldo base y fecha que inicio labores un empleado</h4>
		<h4>tomando en cuenta que la fecha se debe seleccionar por medio de combos</h4>
		<h4>en la página resultante, deberá mostrarse en una tabla los datos del</h4>
		<h4>trabajador, tomando en cuenta que se le dará un 10% de aumento si su</h4>
		<h4>sueldo es impar, y un 15% si es par, en el caso del mes, al seleccionar el número</h4>
		<h4>debe mostrar el nombre del mes que le corresponde.</h4>
		<h4>muestra el total que recibirá finalmente como sueldo líquido el trabajador</h4>
		<br>
		<br>
		<form method="POST" name="FrmE012" action="Res013.php">
			<table>
				<tr>
					<td width="75">Nombre</td>
					<td><input type="text" name="TxtN"></td>
				</tr>
				<tr>
					<td width="75">Apellido</td>
					<td><input type="text" name="TxtA"></td>
				</tr>
				<tr>
					<td width="75">Sueldo Base</td>
					<td><input type="text" name="TxtSB"></td>
				</tr>
				<tr>
					<td>Inicio de labores</td>
						<td>
							<select name="TxtDia">
								<?php 
									for ($i=1; $i <=31 ; $i++) { 
										echo '<option value="'.$i.'">'.$i.'</option>';
									}
								 ?>
							</select>
							<select name="Txtmes">
								<?php 
									for ($i=1; $i <=12 ; $i++) { 
										echo '<option value="'.$i.'">'.$i.'</option>';
									}
								 ?>
							</select>
							<select name="Txtyear">
								<?php 
									for ($i=2010; $i <=2021 ; $i++) { 
										echo '<option value="'.$i.'">'.$i.'</option>';
									}
								 ?>
							</select>
						</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input class="btn btn-danger" type="submit" name="BtnEnviar" value="Enviar">
						<input class="btn btn-Primary" type="reset" name="BtnNuevo" value="Nuevo">
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
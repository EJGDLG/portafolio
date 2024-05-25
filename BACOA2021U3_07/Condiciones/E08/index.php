<!DOCTYPE html>
<html>
<head>
<head>
	<title>Ejercicio 8</title>
<meta charset="utf-8">
	<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<script src="../../assets/js/ie-emulation-modes-warning.js"></script>
</head>
<body>
	<center>
		<h1>Edwin de Leon - Baco A</h1>
		<h2>Ejercicio 08</h2>
		<h3>Ciclos</h3>
		<br>
		<br>
		<form method="POST" name="FrmE08" action="Res08.php">
			<table>
				<tr>
					<td width="75">Nombre</td>
					<td><input type="text" name="TxtNombre"></td>
				</tr>
				<tr>
					<td>apellido</td>
					<td><input type="text" name="TxtApellido"></td>
				</tr>
				<tr>
					<td>Sueldo</td>
					<td><input type="text" name="TxtSueldo"></td>
				</tr>
				<tr>
					<td valign="top">Aumento</td>
					<td>
						<input type="radio" name="rdbAumento" value="1">10%<br>
						<input type="radio" name="rdbAumento" value="2">15%<br>
						<input type="radio" name="rdbAumento" value="3">20%<br>

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
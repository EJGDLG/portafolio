<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 01</title>
	<meta charset="utf-8">
	<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<script src="../../assets/js/ie-emulation-modes-warning.js"></script>
</head>
<body>
	<center>
		<h1>Edwin de Leon - Baco A</h1>
		<h2>Ejercicio 01</h2>
		<h3>Condiciones</h3>
		<br>
		<br>
		<form method="POST" name="frme01" action="Res01.php">
			<table >
				<tr>
					<td>Numero 1</td>
					<td><input type="text" name="txtN1"></td>
				</tr>
				<tr>
					<td>Numero 2</td>
					<td><input type="text" name="txtN2"></td>
				</tr>
				<tr>
					<td>Opciones:</td>
					<td align="left">
						<input type="radio" name="optopciones" value="0">Suma<br>
						<input type="radio" name="optopciones" value="1">Resta
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html> 
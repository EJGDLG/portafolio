<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 10</title>
	<meta charset="utf-8">
	<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<script src="../../assets/js/ie-emulation-modes-warning.js"></script>
</head>
<body>
	<center>
		<h1>Fernando Estrada - BACO A</h1>
		<h2>Ejercicio 10</h2>
		<h3>Ciclos</h3>
		<h4>Elabora un formulario que permita ingresar un número</h4>
		<h4>y muestre una tabla de una columna con la cantidad de filas</h4>
		<h4>según el número ingresado en el formulario, el contenido de</h4>
		<h4>la tabla será el número que se ingresó</h4>
		<br>
		<br>
		<form method="POST" name="frme10" action="rese10.php">
			<table>
				<tr>
					<td>número</td>
					<td><input type="text" name="txtn"></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input class="btn btn-primary" type="submit" name="btnenviar" value="enviar">
						<input class="btn btn-primary" type="reset" name="btnnuevo" value="nuevo">
					</td>
				</tr>
			</table>
		</form>
		<br>
		<br>
		<h1><a class="btn btn-danger" href="../../index.html">Regresar</a></h1>
	</center>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
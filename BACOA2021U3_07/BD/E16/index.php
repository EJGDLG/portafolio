<!DOCTYPE html>
<html>
<head>
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
		<h1>Fernando Estrada - 5BACO "A"</h1>
		<h2>codigo</h2>
		<h3>Departamento</h3>

		<form method="POST" name="frmdepartamento" action="eliminardepto.php">
			<table>
				<tr>
					<td width="100">Codigo <br> Departamento:</td>
					<td>
						<input type="text" name="txtcodigodepto">
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" class="btn btn-primary" name="btningrear" value="eliminar">
						<input type="reset" class="btn btn-primary" name="btnlimpiar" value="limpiar">
					</td>
				</tr>
			</table>
			
		</form>
		<br>
		<br>

		<a href="../../index.html" class="btn btn-danger">Regresar</a>


	</center>

</body>
</html>
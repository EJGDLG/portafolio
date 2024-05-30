<!DOCTYPE html>
<html>
<head>
	<title>Problema 2</title>
	<meta charset="utf-8">
	<link href="../../Recursos/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../Recursos/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<script src="../../Recursos/assets/js/ie-emulation-modes-warning.js"></script>
</head>
<body>
	<center>
		<h1>Problema  2</h1>
		<p> Elabora un programa que convierta una cantidad de Tb en Mb, Kb, Gb y muestra los resultados obtenidos</p>
		<table>
			<tr>
				<td>
					<form method="POST" name="FmPorcentaje" action="Resu02.php">
						<table width="300" >
							<tr>
								<td width="65%"> cantidad de<br>TB</td>
								<td><input type="text" name="TxtTB"></td>
							</tr>
							<tr>
								<td colspan="2" align="center">
								<input   class="btn btn-primary" type="submit" name="BtnEnviar" value="Enviar">
								<input   class="btn btn-success" type="reset" name="BtnNuevo" value="Nuevo">
								</td>
							</tr>
						</table>						
					</form>
				</td>
			</tr>
		</table>
		<br>
		<br>
		<br>
		<a class="btn btn-danger" href="../index.html">Regresar</a>	
	</center>
</body>
</html>
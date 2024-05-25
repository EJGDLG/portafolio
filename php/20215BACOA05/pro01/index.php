<!DOCTYPE html>
<html>
<head>
	<title>Problema 1</title>
	<meta charset="utf-8">
	<link href="../../Recursos/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../Recursos/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<script src="../../Recursos/assets/js/ie-emulation-modes-warning.js"></script>
</head>
<body>
	<center>
		<h1>Problema 1 </h1>
		<p>Elabora un aformaula que permita ingresar una camtidad de hombres y mujeres
		de los cuales se encuentran en un grupo de personas, calula y muestra que<br>
		porcentaje corresponde a las cantidades ingresadas de hombres y mujeres<br>
		</p>
		<table>
			<tr>
				<td>
					<form method="POST" name="FmPorcentaje" action="Resu01.php">
						<table width="280" >
							<tr>
								<td width="65%"> cantidad de<br>Hombre</td>
								<td><input type="text" name="TxtH"></td>
							</tr>
							<tr>
								<td>Cantidad de<br>Mujeres</td>
								<td><input type="text" name="TxtM"></td>
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
<!DOCTYPE html>
<html>
<head>
	<title>Problema 04</title>
	<meta charset="utf-8">
	<link href="../../Recursos/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../Recursos/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<script src="../../Recursos/assets/js/ie-emulation-modes-warning.js"></script>
</head>
<body>
	<center>
		<h1>Problema  4</h1>
		<p>Elabora un programa que permita calcular la edad de una persona, sabiendo que se debe ingresar el nombre de la persona,<br>  
		el año de nacimiento y el año actual, muestra un mensaje diciendo: "XXXXXXX, tiene la edad de XXXXXXXX"</p>
		<table>
			<tr>
				<td>
					<form method="POST" name="FmPorcentaje" action="Resu04.php">
						<table width="300" >
							<tr>
								<td width="65%"> Ingrese su <br>Nombre</td>
								<td><input type="text" name="TxtNO"></td>
							</tr>
							<tr>
								<td width="65%"> Ingrese su año de <br>Nacimiento</td>
								<td><input type="text" name="TxtN"></td>
							</tr>
							<tr>
								<td width="65%"> Ingrese el año<br>actual</td>
								<td><input type="text" name="TxtA"></td>
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
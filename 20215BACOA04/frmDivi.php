<!DOCTYPE html>
<html>
<head>
	<title>Formulario Division</title>
	<meta charset="utf-8">
</head>
<body>
	<center>
		<h1>Elabora un formulario que permita ingresar tres numeros y muestre la multiplicacion de cada uno de los números.</h1>
		<h2>Edwin De Leon  - 5BACO A</h2>
		<hr size="10" color="Skyblue">
		<table width="34%">
			<tr>
				<td width="7%">
					<a href="index.php">Inicio</a>
				</td>
				<td width="7%">
					<a href="frmSuma.php">Suma</a>
				</td>
				<td width="7%">
					<a href="FrmResta.php">Resta</a>
				</td>
				<td width="7%">
					<a href="FrmMulti.php">Multiplicacion</a>
				</td> 
			</tr>
		</table>
		<br>
		<br>	
		<table border="1">
				<tr>
					<td>
						<form method="POST" action="Resdivision.php" name="frmdivision">
							<table>
								<tr>
									<td>Numero 1</td>
									<td><input type="text" name="txtN1"></td>
								</tr>
								<tr>
									<td>Numero 2</td>
									<td><input type="text" name="txtN2"></td>
								</tr>
								<tr>
									<td colspan="2" align="center">
										<input type="submit" name="btndividir" value="Dividir">
										<input type="reset" name="btnlimpiar" value="limpiar">
									</td>							
								</tr>
							</table>
						</form>	
					</td>
				</tr>	
			</table>		
	</center>
</body>
</html>
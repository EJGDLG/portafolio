<!DOCTYPE html>
<html>
<head>
	<title>Formulario Resta</title>
</head>
<body>
	<center>
		<h1>Elabora un formulario que permita infresar cuatro numeros y muestre la resta de los valores</h1>
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
					<a href="FrmMulti.php">Multiplicaion</a>
				</td>
				<td width="7%">
					<a href="frmDivi.php">Division</a>
				</td> 
			</tr>
		</table>
		<br>
		<br>	
		<table border="1">
				<tr>
					<td>
						<form method="POST" action="Resresta.php" name="frmSuma">
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
									<td>Numero 3</td>
									<td><input type="text" name="txtN3"></td>
								</tr>
								<tr>
									<td>Numero 4</td>
									<td><input type="text" name="txtN4"></td>
								</tr>
								<tr>
									<td colspan="2" align="center">
										<input type="submit" name="btnrestar" value="Restar">
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
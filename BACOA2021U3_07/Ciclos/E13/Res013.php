<!DOCTYPE html>
<html>
<head>
	<title>Resultado 13</title>
<meta charset="utf-8">
	<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<script src="../../assets/js/ie-emulation-modes-warning.js"></script>
</head>
<body>
	<center>
		<h1>Edwin de Leon - Baco A</h1>
		<h2>Resultado Ejercicio 13</h2>
		<h3>Ciclos</h3>
		<br>
		<br>
			<?php 
			$nNO=$_POST['TxtN'];
			$nAP=$_POST['TxtA'];
			$nSB=$_POST['TxtSB'];
			$nmes=$_POST['Txtmes'];
			$nyear=$_POST['Txtyear'];
			$nDia=$_POST['TxtDia'];
			if ($nSB%2==0) {
		 			$total=$nSB+$nSB*015;
		 		}else{
		 			$total=$nSB+$nSB*0.10;
		 		}
/*******************************************/

		 		if ($nmes==1) {
		 			$nmes="Enero";
				}elseif ($nmes==2){
					$nmes="Febrero";
		 		}elseif ($nmes==3){
					$nmes="Marzo";
		 		}elseif ($nmes==4){
					$nmes="Abril";
		 		}elseif ($nmes==5){
					$nmes="Mayo";
		 		}elseif ($nmes==6){
					$nmes="Junio";
		 		}elseif ($nmes==7){
					$nmes="Julio";
	 			}elseif ($nmes==8){
					$nmes="Agosto";
				}elseif ($nmes==9){
					$nmes="Septiembre";
		 		}elseif ($nmes==10){
					$nmes="octubre";
		 		}elseif ($nmes==11){
					$nmes="Noviembre";
		 		}else{
					$nmes="Diciembre";
		 			}

		 			
			 ?>

			 <table border="1">
			 	<tr>
			 		<td>Empleado</td>
			 		<td>
			 			<?php 
			 				echo "$nNO $nAP";
			 			 ?>
			 		</td>
			 	</tr>
			 	<tr>	
			 		<td>Sueldo Liquido</td>
			 		<td>
			 			<?php 
			 				echo $total;
			 			 ?>
			 		</td>
			 	</tr>
			 	<tr>
			 		<td>Empleado</td>
			 		<td>
			 			<?php 
			 				echo "$nDia del mes de $nmes del año $nyear";
			 			 ?>
			 		</td>
			 	</tr>
			 	
			 </table>
		

		
		<br>
		<br>
		<h1><a class="btn btn-danger" href="index.php">regresar</a></h1>
	</center>

</body>
</html>
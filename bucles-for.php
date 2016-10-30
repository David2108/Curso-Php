<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Bucle for</title>
	</head>
	
	<body>
		
		<?php 
		
			echo "<h3>Tabla de multiplicar</h3>";
			
			for($i=1;$i<=10;$i++){
				echo "9 x $i = " . 9*$i . "<br>";
			}
			
			echo "Estas salir afuera del bucle";
			
			echo "<h3>Tabla de dividir</h3>";
			
			for($j=10;$j>=-10;$j--){
				
				if($j == 0){
					echo "No se puede dividir para 0<br>";
					continue;
				}
				echo "9 / $j = " . 9/$j . "<br>";
			}
			
			echo "Estas salir afuera del bucle";
		?>
	</body>
</html>
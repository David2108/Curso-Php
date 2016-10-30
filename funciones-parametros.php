<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Funciones parametros</title>
	</head>
	
	<body>
		
		<?php 
			
			//Parametros por valor
			function convertir($frase){
				$frase = strtolower($frase);
				$resultado = ucwords($frase);
				
				return $resultado;
			}
			
			$nombre = "DaVID";
			echo convertir($nombre) . "<br>";
			echo $nombre . "<br><br>";
		
			//Parametros por referencia
			function convertir_(&$frase){
				$frase = strtolower($frase);
				$frase = ucwords($frase);
			
				return $frase;
			}
				
			$nombre_ = "DaVID";
			echo convertir_($nombre_) . "<br>";
			echo $nombre_ . "<br>";
		?>
		
	</body>
</html>
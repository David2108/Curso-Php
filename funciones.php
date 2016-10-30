<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Funciones</title>
	</head>
	
	<body>
		
		<?php 
		
			function calcular($frase,$conversor=true){ //usa un parametro com un valor por defecto
				
				$frase = strtolower($frase); //strtolower convierte todo a minusculas
				
				if($conversor == true){
					$resultado = ucwords($frase); //ucword convierte la primera letra a mayuscula
				}else{
					$resultado = strtoupper($frase); //strtoupper convierte a mayusculas
				}
				return $resultado;
			}
			
			echo (calcular("david",false));
		?>
		
	</body>
</html>
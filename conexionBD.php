<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Conexion a BD con php</title>
	</head>

	<body>

		<?php

			require("datos-conexion.php");

			//por procedimiento
			$coneccion = mysqli_connect($dbHost,$dbusuario,$dbclave);

			//La funcion mysqli_connect_errno() se ejecuta si ocurre algun problema

			if(mysqli_connect_errno()){
				echo "No se pudo conectar";
				exit();
			}

			mysqli_select_db($coneccion,$dbnombre) or die ("No se encontro la base de datos");

			//Esta funcion se usa para especificar el juego de caracteres que se va ha usar
			mysqli_set_charset($coneccion,"utf8");

			$consulta = "select * from produ where seccion = 'FERRETERÍA'";

			$resultado = mysqli_query($coneccion,$consulta);

			echo "<table border=1>";
			while(($fila = mysqli_fetch_row($resultado))== true){

				if(is_array($fila)){

					echo "<tr>";
					for($i=0; $i<count($fila);$i++){

						if($i==0){
							echo "<td>" . $fila[$i] . "</td>";
						}else{
							echo "<td>" . $fila[$i] . "</td>";
						}
						
					}

					echo "</tr>";
				}else{
					echo "No hay datos";
				}

			}

			echo "</table>";

			mysqli_close($coneccion);
		?>

	</body>
</html>
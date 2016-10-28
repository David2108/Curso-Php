<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Arrays Multidimensionales</title>
	</head>

	<body>

		<?php

			$alimentos = array ("fruta" => array("tropical" => "kiwi",
												 "citricos" => "mandarina",
												 "otros" => "manzana"),
								"leche" => array("animal" => "vaca",
												 "vegetal" => "coco"),
								"carne" => array("vacuno" => "lomo",
												 "porcino" => "pata"));

			echo $alimentos["fruta"]["tropical"] . "<br>";

			foreach($alimentos as $clave=>$alim){
				echo "$clave:<br>";

				while(list($clave_a,$valor)=each($alim)){
					echo "$clave_a : $valor <br>";
				}

				echo "<br>";
			}

			echo "<br>";

			//La funcion var_dump se usa para imprimir arrays multidimensionales
			echo var_dump($alimentos);

		?>

	</body>
</html>
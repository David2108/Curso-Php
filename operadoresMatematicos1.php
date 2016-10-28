<?php
	
	if(isset($_POST["button"])){

			$num1 = $_POST["num1"];
			$num2 = $_POST["num2"];
			$opera = $_POST["operacion"];

			clcular($opera);

	}

	function calcular($opera){
			if(!strcmp("Suma",$opera)){
				echo "El resultado es " . ($num1 + $num2);
			}

			if(!strcmp("Resta",$opera)){
				echo "El resultado es " . ($num1 - $num2);
			}

			if(!strcmp("Multiplicación",$opera)){
				echo "El resultado es " . ($num1 * $num2);
			}

			if(!strcmp("División",$opera)){
				echo "El resultado es " . ($num1 / $num2);
			}

			if(!strcmp("Módulo",$opera)){
				echo "El resultado es " . ($num1 % $num2);
			}
		}


?>
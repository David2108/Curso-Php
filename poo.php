<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Documento sin título</title>
    </head>
    
    <body>
    
    	<?php
			
			include("vehiculos.php");
			
			$renault = new Coche();
			$mazda = new Camion();
			
			echo $renault->ruedas."<br>";
			
			echo $mazda->ruedas."<br>";
			$mazda->setColor("Rojo","Mazda");
			$mazda->girar("Izquierda");
			$mazda->arrancar();
		?>
        
    </body>
</html>

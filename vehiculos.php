<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Metodos y Campos Estaticos</title>
    </head>
    
    <body>
    
    	<?php
        
			include("uso-concesionario.php");
			
			$compra_ = new Vehiculo("urbano");
			$compra_->climatizados();
			$compra_->tapizeria("rojo");
			echo "Precio " . $compra_->precioFinal_();
			
        ?>
    	
    </body>
</html>

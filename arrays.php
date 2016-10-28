<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Arrays</title>
    </head>
    
    <body>
        
        <?php

        	$dato = array(12,15,12,13);
        
            $datos = array("Nombre"=>"David","Apellido"=>"Vivanco","Edad"=>26);

            //La funcion sort ordena un array
            sort($dato);

            //La funcion is_array() comprueba si un nombre es un array
            if(is_array($dato)){
            	echo "Es un array<br>";

            	foreach($datos as $clave=>$valor){
            		echo "El valor de $clave es $valor <br>";
            	}

            }else{
            	echo "No es un array";

            }

        
        ?>
        
    </body>

</html>
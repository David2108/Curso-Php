<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Constantes</title>
    </head>
    
    <body>
    
        <?php
        
        //variable global para saber informacion sobre el navegador
        echo $_SERVER['HTTP_USER_AGENT']."<br>";

        //CONSTANTES
        /*
			Se define con la funcion define("nombre",valor)

			el nombre de las constantes debe ir en mayusculas

        */

        define("AUTOR","David");
        
        echo "El autor es " . AUTOR . "<br>";

        //Constantes predefinidas

        echo "Esta instrucción esta en la linea " . __LINE__ . "<br>";
        echo "Estamos trabajando en el fichero " . __FILE__ . "<br>";
        
        ?>
    </body>
</html>


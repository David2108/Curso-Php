<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Variables Estaticas</title>
    </head>
    
    <body>
        <?php
            
            function contador(){
                
                static $contador = 0; //Cuando se declara static esta conservara el valor y la linea donde se declara 
                                      //solo se ejecutara una vez.
                
                $contador++;
                
                echo $contador . "<br>";
            }
        
            contador();
            contador();
            contador();
            contador();
        
        ?>
    </body>
</html>
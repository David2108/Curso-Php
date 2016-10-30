<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Bucles while do-while</title>
        
        <style>
            .salirBucleWhile{
                color:red;
            }
            
            .salirBucleDoWhile{
                color:green;
            }
        </style>
    </head>
    
    <body>
        
        <?php
        
            $var = 1;
            while($var < 6){
                echo "<p>Estamos ejecutando el bucle</p>";
                $var++;
            }
        
            echo "<p class=\"salirBucleWhile\">Estamos saliendo</p>";
        
            do{
                echo "<p>Estamos ejecutando el bucle</p>";
                $var++;
            }while($var<6);
            
            echo "<p class='salirBucleDoWhile'>Estamos saliendo</p>";
        ?>
    </body>
</html>
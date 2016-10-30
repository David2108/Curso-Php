<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Ambito Variables</title>
    </head>
    
    <body>
        <?php
        
            $nombre = "David";
        
            function dameNombre(){
                
                global $nombre;
                $nombre = "Mi nombre es " . $nombre;
            }
        
            dameNombre();
        
            echo $nombre;
        
        ?>
    </body>
</html>
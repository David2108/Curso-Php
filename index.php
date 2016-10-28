<!Doctype html>
<html>
    <head>
    
    </head>
    
    <body>
    
        <?php
            
            print "Curso Php <br>";
            print "Primer ejercicio con php <br>";
        
        
            //Se usa  (.) para concatenar
            print "<h1>Variables</h1>";
            
            $nombre = "David";
            $edad = "26";
        
            print $nombre . " " . $edad."<br>";
            echo $nombre,$edad;
            echo "<br>";
            
            //Funciones 
            
            /*
                include() permite que se ejecute el resto del codigo si no encuentra el archivo.
                require() no permite ejecutar el codigo siguiente.
                
            */
        
            include ("datos_personales.php");
            dameDatos();
        ?>
    </body>
</html>
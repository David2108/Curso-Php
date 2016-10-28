<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Manejo de Strings</title>
        
        <style>
            .resaltar{
                color:red;
                font-weight:bold;
            }
        </style>
    </head>
    
    <body>
        <?php
            
            //FORMA DE PONER COMILLAS DENTRO DE OTRAS COMILLAS EN UNA CADENA
            echo "<p class= ' resaltar ' >Esto es un ejemplo de una frase</p>"; //Se puede usar apostrofes en lugar de comillas
            echo "<p class= \" resaltar \" >Esto es un ejemplo de una frase</p>"; //Se puede poner una barra inclinada a lado                                                                         //de las comillas
        
            //FORMA DE IMPRIMIR TEXTO Y VARIABLES
            $nombre = "David";
            echo "Mi nombre es $nombre <br>"; //Solo funciona con comillas dobles
                
                
            //COMPARAR CADENAS
            $variable1 = "casa";
            $variable2 = "CASA";
        
            /*
                las funciones strcmp y strcasecmp devuelven un 1 si las cadenas no son iguales y un 0 si son iguales
                
                srtcmp() compara dos cadenas teniendo en cuanta si son mayusculas o minusculas
                strcasecmp() compara dos cadenas teniendo sin tener en cuenta si son mayusculas o minusculas
            */
            $resultado = strcmp($variable1,$variable2);
            $resultado1 = strcasecmp($variable1,variable2);
        
        
            if($resultado){
                echo "Las cadenas $variable1 y $variable2 no son iguales<br>";
            }
            else{
                echo "Las cadenas $variable1 y $variable2 son iguales<br>";
            }
        
            if($resultado1){
                echo "Las cadenas $variable1 y $variable2 no son iguales<br>";
            }
            else{
                echo "Las cadenas $variable1 y $variable2 son iguales<br>";
            }
        ?>
    </body>
</html>

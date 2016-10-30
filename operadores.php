<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Operadores</title>
    </head>
    
    <body>
    
        <?php
        
            /*
                OPERADORES
                
                = Se usa para asignacion de un valor a una variable
                
                == Se usa para comparar si los valores de dos variables son iguales
                
                === Se usa para comparar si dos valores de dos variables son iguales y si sus tipos tambien son iguales
                
                != Se usa para saber si dos valores de dos variables son diferentes
                
                <> Se usa para saber si dos valores de dos variables son diferentes y si sus tipos son diferentes
                
                < Se usa para saber si un valor es menor que otro
                
                > Se usa para saber si un valor es mayor que otro
                
                <= Se usa para saber si un valor es menor o igual que otro
                
                >= Se usa para saber si un valor es mayor o igual que otro
            
            */
        
            $variable1 = 8;
            $variable2 = "8";
            $variable3 = "David";
        
        
            if($variable1 === $variable2){
                echo "Las variables $variable2 y $variable3 son iguales y tiene el mismo tipo<br>";
            }else{
                if($variable1 == $variable2){
                    echo "Las variables $variable1 y $variable2 son iguales pero no tienen el mismo tipo<br>";
                }else{
                    echo "Las variables $variable1 y $variable2 no son iguales y no tienen el mismo tipo<br>";
                }
            }
        
            if($variable2 <> $variable3){
                echo "Las variables $variable2 y $variable3 son diferentes y tienen diferente tipo<br>";
            }else{
                if($variable2 != $variable3){
                    echo "Las variables $variable2 y $variable3 son diferentes pero no tienen el mismo tipo<br>";
                }else{
                    echo "Las variables $variable2 y $variable3 son iguales y no tienen el mismo tipo<br>";
                }
            }
        
        ?>
    
    </body>
</html>
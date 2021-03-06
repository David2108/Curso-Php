<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Operadores - Formulario de ingreso</title>
        
        <style>
        
            h1{
                text-align:center;
            }
            
            table{
                background-color:#FFC;
                padding:5px;
                border:#666 5px solid;
            }
            
            .no_validado{
                font-size:10px;
                color:#F00;
                font-weight:bold;
            }
            
            .validado{
                font-size:10px;
                color:#0C3;
                font-weight:bold;
            }
            
            table{
            	width:15%;
            	margin-left:auto;
            	margin-right:auto;
            }
            
        </style>
    </head>

    <body>
        
        <h1>USANDO OPERADORES COMPARACION</h1>
        
        <form action="" method="post" name="datos_usuario" id="datos_usuario">
            
            <table>
                <tr>
                    <td>Nombre:</td>
                    <td><label for="nombre_usuario"></label><input type="text" name="nombre_usuario" id="nombre_usuario"/></td>
                </tr>
                <tr>
                    <td>Contrase&ntilde;a:</td>
                    <td><label for="contra"></label><input type="password" name="contra" id="contra"/></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"/></td>
                </tr>
            </table>
            
        </form>
        
        <?php 
        
        	if(isset($_POST["enviando"])){
        		
        		$usuario = $_POST["nombre_usuario"];
        		$contra = $_POST["contra"];
        		
        		echo $usuario=="David" && $contra=="1234" ? "<h1>Puedes acceder</h1>" : "<h1>No puedes acceder</h1>";
        	}	
        
        ?>
    </body>
</html>
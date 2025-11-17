<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
        <title>Primeros ejemplos con PHP</title>
    </head>
    <body>
        <div id="contenido">
        <div id="cabecera"><h2>Primeros ejemplos PHP</h2></div>
        <div id="principal">
             <?php

             ?>
                <h3>Trabajando con variables</h3>
             <?php
                $valor1 = 23;
                $valor2 = 80;
                $cantidadArticulos = 12;

                echo '<p>El valor de $valor1 es '. $valor1.'</p>'.
                    '<p>El valor de $valor2 es '. $valor2.'</p>'.
                    '<p>La suma de 23 y 80 es '. $valor1 + $valor2.'</p>'. 
                    '<p>La resta de 23 y 80 es '. $valor1 - $valor2.'</p>'.
                    '<p>El producto de 23 y 80 es '. $valor1 * $valor2.'</p>'. 
                    '<p>El resto de 23 y 80 es '. $valor1 % $valor2.'</p>'. 
                    '<p>Hay actualmente '. $cantidadArticulos.' artículos</p>'. 
                    '<p>Ahora hay '. ++$cantidadArticulos.' artículos</p>'. 
                    '<p>Ahora hay '. --$cantidadArticulos.' artículos</p>'.
                    '<p>Ahora hay '. 10 + $cantidadArticulos.' artículos</p>';
             ?>     
        </div>
         <div id="pie">Implantaci&oacute;n de aplicaciones web</div>
        </div>
    </body>
</html>

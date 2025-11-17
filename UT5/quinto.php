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
                define("DESCUENTO", 25);
                define('IVA', 8);

                $precio = 234.89;
                $descuentoPrecio = ($precio / 100) * constant("DESCUENTO");
                $precioConDescuento = $precio - $descuentoPrecio;
                $descuentoIVA = ($precioConDescuento / 100) * constant("IVA");
                $precioFinal = $precioConDescuento + $descuentoIVA;

                echo '<hr/>
                
                    <table>
                        <tr>
                            <th colspan=2>Datos de un producto</th>
                        </tr>    
                        <tr>
                            <td>Precio producto</td>
                            <td>'. $precio.'€</td>
                        </tr>    
                        <tr>
                            <td>Descuento 25%</td>
                            <td>'. $descuentoPrecio.'€</td>
                        </tr>         
                        <tr>
                            <td>Precio con descuento</td>
                            <td>'. $precioConDescuento.'€</td>
                        </tr>         
                        <tr>
                            <td>IVA 8%</td>
                            <td>'. $descuentoIVA.'€</td>
                        </tr>         
                        <tr>
                            <td>Precio final</td>
                            <td>'. $precioFinal.'€</td>
                        </tr>              
                    </table>';
             ?>     
        </div>
         <div id="pie">Implantaci&oacute;n de aplicaciones web</div>
        </div>
    </body>
</html>

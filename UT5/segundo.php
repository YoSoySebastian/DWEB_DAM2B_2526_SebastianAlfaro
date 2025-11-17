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
                 echo "<h2>Variables y tipos de datos - Constantes</h2>".
                    "<hr/>";
             ?>
            <h3>Datos de un alumno</h3>
             <?php
                 define("INSTITUTO", "Mª Ana Sanz");
                 define("HORAS", 5);
                 $nombre = "Pepe";
                 $edad = 23;
                 $altura = 1.78;
                 $modulo = "Implantación de aplicaciones web";
                 $pendiente = true;

                 echo "<p>Instituto: ". constant("INSTITUTO"). "</p>".
                    "<p>Nombre: ". $nombre. "</p>".
                    "<p>Edad: ". $edad. "</p>".
                    "<p>Altura: ". $altura. "</p>".
                    "<p>Módulo: ". $modulo. "</p>".
                    "<p>Horas: ". constant("HORAS"). "</p>".
                    "<p>Algo pendiente dep primero?: ". $pendiente. "</p>";
             ?>     
        </div>
         <div id="pie">Implantaci&oacute;n de aplicaciones web</div>
        </div>
    </body>
</html>

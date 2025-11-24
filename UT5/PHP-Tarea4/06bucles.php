<?php
    include "cabecera.php";

    echo "<h3>Generando casillas de verificación</h3>\n";
    echo "<form action='#' method='get' >";
    echo "<div>";

    for ($i=1; $i <= 10 ; $i++) { 
        echo "<input type='checkbox' name='casilla". $i ."' value ='". $i. "'/>". " Casilla ". $i. "<br>";        
    }

    echo "</div></form>"; 

    include "pie.php";
?>

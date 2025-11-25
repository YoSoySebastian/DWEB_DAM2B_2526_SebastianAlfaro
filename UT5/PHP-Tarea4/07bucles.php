<?php
    include "cabecera.php";

    echo "<h3>Generando botones</h3>\n";
    echo "<form action='#' method='get' >";
    echo "<div>";

    for ($i=1; $i <= 10 ; $i++) { 
        echo "<label> Botón ". $i. "</label>
        <input type='submit' name='botón". $i ."' value ='Editar'/>
        <input type='submit' name='botón". $i ."' value ='Borrar'/><br>
        ";        
    }

    echo "</div></form>"; 

    include "pie.php";
?>

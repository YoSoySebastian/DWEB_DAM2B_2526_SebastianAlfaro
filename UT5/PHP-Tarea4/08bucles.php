<?php
    include "cabecera.php";

    echo "<h3>Generando tabla de multiplicar de un nº</h3>\n";
    echo "<h3>Tabla de multiplicar del 4</h3>\n";

    echo "<table>";
    for ($i = 1; $i <= 4; $i++) { 
        echo "<tr>";
        for ($j=1; $j <= 2; $j++) { 
            if ($j == 1){
                echo "<th>4 * ". $i."</th>";
            } else {
                echo "<th>". 4 * $i."</th>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";

    include "pie.php";
?>

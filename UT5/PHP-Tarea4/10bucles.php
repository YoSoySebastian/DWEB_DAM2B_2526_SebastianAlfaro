<?php
    include "cabecera.php";

    echo "<h3>Generando tabla de multiplicar hasta un nº</h3>\n";
    echo "<h3>Tabla de multiplicar hasta el 5</h3>\n";

    echo "<table>";
    for ($i = 0; $i <= 5; $i++) { 
        if($i % 2 !== 0){
            echo "<tr class='impar'>";
        } elseif ($i % 2 == 0 && $i !== 0){
            echo "<tr class='par'>";
        }
        for ($j = 0; $j <= 10; $j++) { 
            if ($i == 0){
                if ($j == 0){
                    echo "<th>x</th>";
                } else {
                    echo "<th>". $j."</th>";
                }
            } else {
                if ($j == 0){
                    echo "<td>". $i."</td>";
                } else {
                    echo "<td>". $i * $j."</td>";
                }
            }
        }
        echo "</tr>";
    }
    echo "</table>";

    include "pie.php";
?>

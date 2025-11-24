<?php
    include "cabecera.php";

    echo "<h2>Tabla de una fila</h2>";
    
    echo "<table>
            <tr>";
    for ($i = 1; $i <= 10; $i++){
        echo "<td>$i</td>";
    }

    echo "  </tr>
          </table>";

    echo "<h2>Tabla de una columna</h2>";

    echo "<table>";
    for ($i = 1; $i <= 10; $i++){
        echo "<tr>";
        for($j = 1; $j <= 1; $j++){
            echo "<td>$i</td>";
        }
        echo "</tr>";
    }

    echo "</table>";

    include "pie.php";
?>

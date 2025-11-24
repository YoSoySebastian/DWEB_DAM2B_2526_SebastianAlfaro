<?php
    include "cabecera.php";

    echo "<h2>Generando enlaces</h2>";

    $variable = 1;

    while($variable < 10){
        echo "<a href='#'>Enlace ". $variable."</a><br>";
        $variable++;
    }

    include "pie.php";
?>

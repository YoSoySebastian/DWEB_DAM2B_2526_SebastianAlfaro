<?php
    include "cabecera.php";

    echo "<h2>Lista de viñetas con for</h2>";

    echo "<ul>";

    for($i = 1; $i <= 10; $i++){
        echo "<li>Iteración ". $i. "<br></li>";
    }

    echo "</ul>";


    echo "<h2>Lista de viñetas con while</h2>";
       
    echo "<ol>";

    $j = 1;

    while($j <= 10){
        echo "<li>Iteración ". $j. "<br></li>";
        $j++;
    }

    echo "</ol>";

    include "pie.php";
?>

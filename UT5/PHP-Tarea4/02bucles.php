<?php
    include "cabecera.php";

    echo "<h2>Simulando notas de una clase y contando aprobados</h2>";

    define("ALUMNOS", 20);
    $aprobados = 0;

    for ($i = 1; $i <= constant("ALUMNOS"); $i++) { 
        $random = rand(1, 10);
        if($random >= 5){
            $aprobados++;
        }
    }

    echo "Total aprobados ". $aprobados;


    include "pie.php";
?>

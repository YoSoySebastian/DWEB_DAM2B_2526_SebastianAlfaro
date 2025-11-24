<?php
    include "cabecera.php";

    $saldo = 250;
    $gastado = 0;
    $contador = 0;

    while($saldo > $gastado){
        $contador++;
        $gastado += 16;

        echo $contador. " : ". $gastado. "<br>";
    }

    echo "Por ". $saldo. "€, se pueden comprar ". $contador - 1 . " libros";

    include "pie.php";
?>

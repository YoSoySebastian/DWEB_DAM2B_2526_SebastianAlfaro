<?php
    include "cabecera.php";

    $numeroSecreto = 76;
    $intento = rand(1, 100);

    echo "Su intento: ". $intento. "<br>";
    if ($intento < $numeroSecreto){
        echo "El intento es <i>más bajo</i> que el nº secreto <br>";
    } elseif ($intento > $numeroSecreto){
        echo "El intento es <i>más alto</i> que el nº secreto <br>";
    } else {
        echo "El intento es acertado!";
    }

    echo "<a href='07if.php'>Recargar</a>";

    include "pie.php";
?>

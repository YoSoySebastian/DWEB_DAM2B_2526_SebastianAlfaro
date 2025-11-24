<?php
    include "cabecera.php";

    $puntos = 550;
    $bonificacion = true;

    echo "Puntos iniciales: ". $puntos. "<br>";
    if ($bonificacion) {
        echo "Con bonificacion de 100 puntos". "<br>";
        $puntos = $puntos + 100;
    } else {
        echo "Sin bonificacion de puntos". "<br>";
    }

    echo "Puntos totales: ". $puntos;
       
    include "pie.php";
?>

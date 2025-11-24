<?php
    include "cabecera.php";

    $random = rand(1, 10);

    if ($random < 5){
        echo "Sebastian ha tenido un SUSPENSO";
    } elseif ($random == 5) {
        echo "Sebastian ha tenido un SUFICIENTE";
    } elseif ($random > 7 && $random < 10) {
        echo "Sebastian ha tenido un SOBRESALIENTE";
    } elseif ($random > 5 && $random <= 7) {
        echo "Sebastian ha tenido un BIEN";
    } else {
        echo "Sebastian ha tenido un PERFECTO";
    }
       
    include "pie.php";
?>

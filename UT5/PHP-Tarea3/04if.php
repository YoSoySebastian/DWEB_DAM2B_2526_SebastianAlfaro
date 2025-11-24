<?php
    include "cabecera.php";

    $pais = "Francia";

    if ($pais == "Holanda"){
        echo "Ámsterdam";
    } elseif ($pais == "Bélgica") {
        echo "Bruselas";
    } elseif ($pais == "Alemania") {
        echo "Berlín";
    } elseif ($pais == "Francia") {
        echo "París";
    } else {
        echo "No tengo documentado ese país";
    }
       
    include "pie.php";
?>

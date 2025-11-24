<?php
    include "cabecera.php";

    $nombre = "Sebastian";
    $hora = date("H");

    if ($hora > 12 && $hora < 20){
        echo "Buenas tardes ". $nombre;
    } elseif ($hora > 7 && $hora < 12) {
        echo "Buenos días ". $nombre; 
    } else {
        echo "Buenas noches ". $nombre;
    }

    include "pie.php";
?>

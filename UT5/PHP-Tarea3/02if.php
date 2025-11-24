<?php
    include "cabecera.php";

    $idioma = "Inglés";

    if ($idioma == "Castellano"){
        echo "Bienvenido";
    } elseif ($idioma == "Inglés") {
        echo "Welcome";
    } elseif ($idioma == "Francés") {
        echo "Bienvenu";
    } else {
        echo "Idioma desconocido";
    }
       
    include "pie.php";
?>

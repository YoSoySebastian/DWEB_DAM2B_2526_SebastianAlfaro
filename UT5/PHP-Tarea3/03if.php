<?php
    include "cabecera.php";

    $dia = rand(1, 7);

    switch ($dia){
        case 1:
            echo "Día laborable";
            break;
        case 2:
            echo "Día laborable";
            break;
        case 3:
            echo "Día laborable";
            break;
        case 4:
            echo "Día laborable";
            break;
        case 5:
            echo "Día laborable";
            break;
        case 6:
            echo "Día no laborable";
            break;
        case 7:
            echo "Día no laborable";
            break;
    }
       
    include "pie.php";
?>

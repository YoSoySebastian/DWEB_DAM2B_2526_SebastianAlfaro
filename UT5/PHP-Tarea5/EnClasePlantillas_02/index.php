<?php
    $suma = 0;

    for ($i = 1; $i <= 8; $i++) { 
        $tirada = rand(1, 6);
        $suma += $tirada;
    }

    echo "<p>Mi nombre es Ana y voy a tirar un dado 8 veces y sumar las tiradas</p> 
            <p>La suma de las tiradas ha sido: ". $suma. "</p>";
?>

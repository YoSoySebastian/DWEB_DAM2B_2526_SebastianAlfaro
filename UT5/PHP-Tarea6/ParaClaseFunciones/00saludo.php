<?php
      include "includes/cabecera.php";
      
      function saludar(){
            echo "Hola, esto es un saludo sin parámetros";
      }

      function saludoPersonalizado($nombre){
            echo "Hola ". $nombre. ", cómo estás?";
      }
      
      include "includes/pie.php";  
     
?>

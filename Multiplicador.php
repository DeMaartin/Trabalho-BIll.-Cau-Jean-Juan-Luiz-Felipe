<?php
    $multiplicador = readline("Escreva um número de 1 à 10: ");
    for($i = 0; $i<=10; $i++){
        echo $multiplicador . "x" . "$i" . "=".$i*$multiplicador.PHP_EOL;
    }
?>
<?php

function quantidade($array) {
    return count($array);
    }

    $numerosDigitados = [];
    $soma = 0;

    while (true) {
    $num = readline("Escreva qualquer número: ");
    if ($num < 0) {
    break;
    }
    $numerosDigitados[] = $num;
    $soma += $num;
    }
    $quantidade = quantidade($numerosDigitados);
    if ($quantidade > 0) {
    $media = $soma / $quantidade;
    echo "A média dos números é: $media";
    }

?>
<?php 

function essacoisacalculaIMC($peso, $altura) {
    $imc = $peso / ($altura * $altura);
    return $imc;
}

$altura;
$peso;
$altura = readline("Digite sua altura em centímetros: ");
$peso = readline("Digite seu peso em quilogramas: ");
$AlturaMetros = $altura / 100;

$imc = essacoisacalculaIMC($peso, $AlturaMetros);

echo "Seu IMC é: " . round($imc, 2);

?>

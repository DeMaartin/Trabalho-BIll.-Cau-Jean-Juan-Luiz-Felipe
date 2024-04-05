<?php

function ordenarPorBubble(&$arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        $trocou = false;
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
                $trocou = true;
            }
        }
        if (!$trocou) {
            break;
        }
    }
}

echo "Digite os números separados por espaços para ordenar (ex: 5 2 8 1): ";
$input = readline();

$array = explode(' ', $input);
$array = array_map('intval', $array);

echo "Original: ";
echo implode(", ", $array);
echo "\n";

ordenarPorBubble($array);

echo "Tcharam!: ";
echo implode(", ", $array);

?>
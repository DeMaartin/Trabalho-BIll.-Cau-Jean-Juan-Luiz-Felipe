<?php
$num =  readline("Escreva um  número inteiro positivo: ");
    echo "Os divisiveis de $num são: ";
        for($i = 1; $i<=$num; $i++)
        {
            if($num % $i==0)
            {
                echo "$i" .PHP_EOL;
            }
        }
<?php 
$numeroAleatorio = rand(1,100);
$gameLoop = true;

while( $gameLoop ) {    
    $chute = readline ("Chute um número: ");
    if ( $chute == $numeroAleatorio){
    echo "Acertou" ;   
    }

    if ( $chute < $numeroAleatorio){
             echo "Tente novamente o número aleatorio é maior que seu chute ". PHP_EOL;
    }

     if ($chute > $numeroAleatorio){
     echo"Tente novamente o número aleatorio é menor que seu chute".PHP_EOL;
     }

}

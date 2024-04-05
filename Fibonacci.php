<?php

    function fibon($a, $zero = false){
        if($a >= 2){
            $f = ($zero) ? [0,1] : [1,1];
            for($i = 2; $i < $a; $i++){
                $f[$i] = $f[$i-1] + $f[$i-2];
            }
            return $f;
        }
        return ($a == 1) ? [1] : [];
    }

    $fib = fibon(20, true);
    foreach($fib as $v){
        echo (end($fib) == $v) ? $v : $v. ', ';
    }
?>

<?php

function cowsay($message) {
    $bubble = <<<BUBBLE
< $message >
--------
    \\   ^__^
     \\  (oo)\\_______
        (__)\\       )\\/\\
            ||----w |
            ||     ||
BUBBLE;

    echo "<pre>$bubble</pre>";
}

// Exemplo de uso
$message = "Olá, mundo!";
cowsay($message);

?>

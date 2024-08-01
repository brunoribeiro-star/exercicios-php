<?php
    $frase = "frase de exemplo para fazer a contagem das palavras.";

    $palavras = explode(" ", trim($frase));
    
    $cont = count($palavras);
   
    echo "Número de palavras: " . $cont . "<br>";
    
    foreach ($palavras as $palavra) {
        echo $palavra . "<br>";
    }

?>
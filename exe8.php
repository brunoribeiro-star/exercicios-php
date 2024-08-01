<?php
    $frase = 'frase teste do ex8 eliminando espaços';
    $palavras = str_split($frase);
    $tam = strlen($frase);
    $i;
    for($i=0; $i<$tam; $i++) {
        if($palavras[$i] == ' ') {
            $i++;  
        }
        echo $palavras[$i];
    }
?>
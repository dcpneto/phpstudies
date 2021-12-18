<?php

    $frase = "O rato roeu a roupa do rei de Roma";

    $contador = 0;

    for ($i = 0; $i < strlen($frase); $i++){

        if ($frase[$i] === "a"){
            $contador++;
        }
    }

    echo "A frase tem $contador letras A";
<?php

    $frase = "Testando o explode";

    $fraseArray = explode(" ", $frase);

    print_r($fraseArray);

    $fraseDois = "Carro - Navio - Helicóptero - Barco - Jangada";
    $fraseArrayDois = explode("-", $fraseDois);
    echo "<br>";
    print_r($fraseArrayDois);
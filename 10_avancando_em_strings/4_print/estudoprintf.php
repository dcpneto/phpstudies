<?php

    $nome = "Djalma";
    $idade = 26;
    $temperatura = 23.6;

    # %s -> String
    printf("O nome é %s <br>", $nome);

    # %d -> int
    printf("A idade é %d e farei %d ao fim do ano <br>", $idade, 27);

    # %f -> float
    printf("A temperatura é %.1fº Celsius <br>", $temperatura); #mostrando apenas uma casa
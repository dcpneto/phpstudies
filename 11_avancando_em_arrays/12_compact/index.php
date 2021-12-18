<?php   

    #é o efeito contrário do extract

    $marca = "BMW";
    $motor = "3.0";
    $tetoSolar = true;
    $portas = 4;

    $carro = compact("marca", "motor", "tetoSolar", "portas");

    print_r($carro);
    echo "<br>";

    $nome = "Djalma";
    $idade = 26;
    $altura = 1.75;
    $solteiro = true;

    $pessoa = compact("nome", "idade", "altura", "solteiro");

    foreach ($pessoa as $caracteristica => $value){
        echo "$caracteristica: $value <br>";
    }
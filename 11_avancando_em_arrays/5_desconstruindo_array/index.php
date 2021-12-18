<?php

    $pessoa = ["Djalma", 27, "Programador", "Castanho"];

    list($nome, $idade, $profissao, $corDoOlho) = $pessoa;

    echo "Olá, me chamo $nome, tenho $idade anos, sou $profissao e meus olhos tem a cor $corDoOlho <br>";

    $carro = ["Jaguar", 3.0, "Azul", 18, "Teto Solar", "Automatico"];
    list($marca, $motor, $cor, $consumo, $adicionais, $cambio) = $carro;

    echo "O carro da marca $carro, tem um motor de " . $motor . ", é da cor $cor, tem o desempenho de $consumo KM/L, possui $adicionais, e tem o cambio $cambio"; #Deu erro no motor
    
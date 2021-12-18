<?php
    function nomeIdade($nome, $idade){
        echo "Olá, eu sou o $nome e tenho $idade anos <br>";
    }

    nomeIdade("Djalma", 26);

    function parOuImpar ($numero){
        if ($numero % 2 == 0){
            echo "O número $numero é par <br>";
        } else {
            echo "O número $numero é ímpar <br>";
        }
    }

    parOuImpar(3);
    parOuImpar(2);

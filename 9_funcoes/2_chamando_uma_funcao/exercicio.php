<?php

    $arr = ["teste", "olá", "balão", "janela", "planta"];

    $teste = implode (", ", $arr); #Imprime o array separado por virgulas

    echo $teste;

    echo "<br>";
    echo "-----------";
    echo "<br>";


    function multiplicar(){

        $varUm = 5;
        $varDois = 2;
        $varTres = 3;

       echo $varUm * $varDois * $varTres;

    }

    multiplicar();

    echo "<br>";
    echo "-----------";
    echo "<br>";

    function nomeSobrenome(){
        $nome = "Djalma";
        $sobrenome = "Neto";
        echo $nome . " " . $sobrenome;
    }

    nomeSobrenome();
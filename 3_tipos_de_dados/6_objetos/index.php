<?php

    class Pessoa {
        function falar(){
            echo "Olá pessoal!";
        }
    }

    $djalma = new Pessoa();
    $djalma->nome = "Djalma";

    echo $djalma->nome;

    echo "<br>";
    
    $djalma->falar();
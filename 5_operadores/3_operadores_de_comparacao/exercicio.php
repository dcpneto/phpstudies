<?php

    $nome = "Djalma";
    $apelido = "Neto";

    if($nome == $apelido){
        echo "É igual <br>"; #Não vai imprimir
    }

    if (5 == 5){
        echo "É igual - 2 <br>";
    }

    if (5 === "5"){
        echo "É igual - 3 <br>"; #Não vai imprimir
    }

    if (4 != 5){
        echo "É diferente <br>";
    }

    if (5 != 5){
        echo "É diferente -2 <br>"; #Não vai imprimir
    }

    if (1 !== 2){
        echo "Não é idêntico <br>";
    }
    if (1 !== "1"){
        echo "Não é idêntico - 2 <br>";
    }
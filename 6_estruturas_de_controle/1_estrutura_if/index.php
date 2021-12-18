<?php
    if(5 > 2){
        echo "A condição é verdadeira para imprimir isto. <br>";
    }

    if (2 > 5){
        echo "A condição é falsa, portanto não será exibido <br>";
    }

    #If aninhado

    if (5 > 2){
        echo "Entrou no primeiro if <br>";
        if (10 > 5){
            echo "Entrou no segundo if <br>";
        }
    }
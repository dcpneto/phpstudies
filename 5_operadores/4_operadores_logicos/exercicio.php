<?php

    if (5 > 2 && 10 < 100){
        echo "Ambas as condições são verdadeiras <br>";
    }

    if (5 > 2 && 100 < 10){
        echo "Ambas as condições são verdadeiras - 2 <br>"; #Não irá imprimir por não atender o true/true do AND
    }

    if (5 > 2 || 100 < 10){
        echo "Uma ou mais das condições é verdadeira verdadeira <br>";
    }

    if (5 < 2 || 100 < 10){
        echo "Uma ou mais das condições é verdadeira verdadeira -2 <br>";#Não irá imprimir por não atender a questão de nenhuma das expressões ser TRUE
    }

    if( (5>2 && 10 < 100) || 3 > 9){
        echo "Irá imprimir por ao menos uma parte estar como true / if um pouco mais complexo <br>";
    }

    if (!(5>2)){
        echo "A condição é verdadeira, mas está negada no começo <br>";
    }

    if (!(5<2)){
        echo "A condição é falsa, mas está negada no começo tornando-se veradeira <br>";
    }
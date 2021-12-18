<?php

    $teste = "LOREM IPSUM";
    $num = 10;
    $_nome = "Djalma";

    echo $teste;
    echo "<br>";
    echo $num;
    echo "<br>";
    echo $_nome;
    echo "<br>";

    $nomeComposto = "Variação de nomes com camelCase";
    $nome_composto = "Ou pode usar o underline para espaçar";

    echo $nomeComposto;
    echo "<br>";
    echo $nome_composto;
    

    echo "<br>";
    echo "<br>";    

    #Variavel de Variavel

    $x = "nome"; //Valor de Nome
    echo "$x <br>";
    $$x = "Djalma"; //Var com o nome de X(nome), com o valor de Djalma
    echo "$nome <br>";

    
    echo "<br>";
    echo "<br>";  

    #Variável por referência

    $y =2;
    $z =& $y;
    echo $z;
    echo "<br>"; 
    echo $y;
